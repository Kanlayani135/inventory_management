<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Division;

class EmployeeController extends Controller
{
    private $title = 'Employee';
    function __construct() {
        $this->middleware('auth');
      } 
    function list(Request $request) {
        $data = $request->getQueryParams();
        $query = Employee::orderBy('code');
        $term = (key_exists('term', $data))? $data['term'] : '';
        foreach(preg_split('/\s+/', $term) as $word) {
        $query->where(function($innerQuery) use ($word) {
        return $innerQuery
        ->where('code', 'LIKE', "%{$word}%")
        ->orWhere('fname', 'LIKE', "%{$word}%")
        ->orWhere('lname', 'LIKE', "%{$word}%")
        ->orWhere('position', 'LIKE', "%{$word}%")
        ->orWhere('workstatus', 'LIKE', "%{$word}%")
        ->orWhere('hireddate', 'LIKE', "%{$word}%");
        });
        }
    return view('employee-list', [
    'title' => "{$this->title} 's List",
    'employees' => Employee::orderBy('code')->get(),
    'employees' => $query->paginate(5),
    ]);
    }

    function show($employeeCode) {
        $employee = Employee::where('code', $employeeCode)->firstOrFail();

        return view('employee-view', [
        'title' => "{$this->title}'s Profile",
        'employee' => $employee,
        ]);
        }

        function createForm(Request $request) {
            $departments = Department::orderBy('id');
            $divisions = Division::orderBy('id');
            
         
            return view('employee-create',[
            'title' => "{$this->title}'s Form",
            'departments' => $departments->get(),
            'divisions' => $divisions->get(),
            ]);
        }  

        function create(Request $request) {
            try {
            $employee = Employee::create($request->getParsedBody());
            $data = $request->getParsedBody();
            $employee = new Employee();
            $employee->fill($data);
            $employee->department()->associate($data['department']);
            $employee->division()->associate($data['division']);
            $employee->save();
                return redirect()->route('employee-list')->with('success',"Created employee is successfully"); 
            } catch(\Exception $error){ return back()->withInput()->withErrors([ 'input'=>$error ->getMessage(),]);
        }    
    }

        
        function updateForm($employeeCode) {
                $employee = Employee::where('code', $employeeCode)->firstOrFail();
                $departments = Department::orderBy('id');
                $divisions = Division::orderBy('id');
                return view('employee-update',[
                'title' => "{$this->title}'s Editing",
                'departments' => $departments->get(),
                'divisions' => $divisions->get(),
                'employee' => $employee,
                
                ]);
            }   

        function update(Request $request, $employeeCode) {
            try{
                    $employee = Employee::where('code', $employeeCode)->firstOrFail();
                    $data = $request->getParsedBody();
                    $employee->fill($data);
                    $employee->department()->associate($data['department']);
                    $employee->division()->associate($data['division']);
                    $employee->save();
                    return redirect()->route('employee-list',[
                    'employee' => $employee->code,
                    ])->with('success',"Employee updated is successfully");;
                } catch(\Exception $error){ return back()->withInput()->withErrors([ 'input'=>$error ->getMessage(),]);
            }
        }

        function delete($employeeCode) {
            try{
                $employee = Employee::where('code', $employeeCode)->firstOrFail();
                $employee->delete();
                return redirect()->route('employee-list')->with('success',"Employee Delete is successfully");
                } catch(\Exception $error){ return back()->withInput()->withErrors([ 'input'=>$error ->getMessage(),]);
            }
        }
    }
