<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Division;

class DepartmentsController extends Controller

{
    private $title = 'Department';
    function __construct() {
      $this->middleware('auth');
    } 
    function list(Request $request)
    {
      $data = $request->getQueryParams();
      $query = Department::orderBy('id');
      $term = (key_exists('term', $data)) ? $data['term'] : '';
      foreach (preg_split('/\s+/', $term) as $word) {
        $query->where(function ($innerQuery) use ($word) {
          return $innerQuery
            ->where('id', 'LIKE', "%{$word}%")
            ->orWhere('department', 'LIKE', "%{$word}%")
            ->orWhere('department_head', 'LIKE', "%{$word}%");
  
        });
      }
  
      return view('departments-list', [
        'title' => "{$this->title} : List",
        'term' => $term,
        'departments' => $query->paginate(10),
      ]);
    }
}