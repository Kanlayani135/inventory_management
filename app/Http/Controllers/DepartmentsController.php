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
    
  function createForm(Request $request) {
    return view('departments-create',[
    'title' => "{$this->title} : Create Departments",
    ]);
    }  

  function create(Request $request) {
    $departments = Department::create($request->getParsedBody());
    return redirect()->route('departments-list'); 
  }

    function delete($department_id) {
      $department = Department::where('id',$department_id)->firstOrFail();
      $department->delete();
      return redirect()->route('departments-list')->with('success'."Department deleted successfully");
      }
      
    
}
