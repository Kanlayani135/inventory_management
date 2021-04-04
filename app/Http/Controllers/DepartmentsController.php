<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Division;

class DepartmentsController extends Controller

{
  private $title = '';
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
        'title' => "{$this->title}Department's List",
        'term' => $term,
        'departments' => $query->paginate(5),
      ]);
    }

  function show($departments_id) {
    $departments = Department::where('id', $departments_id)->firstOrFail();

    return view('departments-view', [
    'title' => "{$this->title}Head of each Departments",
    'departments' => $departments,
    ]);
  }
    
  function createForm(Request $request) {
    return view('departments-create',[
    'title' => "{$this->title} Department's Form",
    ]);
  }  

  function create(Request $request) {
    $departments = Department::create($request->getParsedBody());
    return redirect()->route('departments-list')->with('success',"Department created is successfully"); 
  }

  function updateForm($departments_id) {
    $departments = Department::where('id', $departments_id)->firstOrFail();
    return view('departments-update',[
    'title' => "{$this->title} Department's Editing",
    'departments' => $departments,
    ]);
}   

function update(Request $request, $departments_id) {
    $departments = Department::where('id', $departments_id)->firstOrFail();
    $data = $request->getParsedBody();
    $departments->fill($data);
    $departments->save();
    return redirect()->route('departments-list',['departments' => $departments->id,
      ])->with('success',"Department updated is successfully");
}

    function delete($department_id) {
      $department = Department::where('id',$department_id)->firstOrFail();
      $department->delete();
      return redirect()->route('departments-list')->with('success',"Department deleted is successfully");
    }   
}
