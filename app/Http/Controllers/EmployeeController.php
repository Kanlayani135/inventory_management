<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Division;

class EmployeeController extends Controller
{
    private $title = 'Employee';
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
        ->orWhere('address', 'LIKE', "%{$word}%")
        ->orWhere('sex', 'LIKE', "%{$word}%")
        ->orWhere('dob', 'LIKE', "%{$word}%")
        ->orWhere('age', 'LIKE', "%{$word}%")
        ->orWhere('tel', 'LIKE', "%{$word}%")
        ->orWhere('civilstatus', 'LIKE', "%{$word}%")
        ->orWhere('position', 'LIKE', "%{$word}%")
        ->orWhere('workstatus', 'LIKE', "%{$word}%")
        ->orWhere('hireddate', 'LIKE', "%{$word}%");
        });
        }
    return view('employee-list', [
    'title' => "{$this->title} 's list",
    'employees' => Employee::orderBy('code')->get(),
    'codes' => $query->paginate(5),
    ]);
    }

    function show($employeeCode) {
        $employee = Employee::where('code', $employeeCode)->firstOrFail();

        return view('employee-view', [
        'title' => "{$this->title} 's profile",
        'employee' => $employee,
        ]);
        }

        function createForm(Request $request) {
            return view('employee-create',[
            'title' => "{$this->title} : Create Employee",
            
            ]);
            }  

        function create(Request $request) {
            $employee = Employee::create($request->getParsedBody());
            return redirect()->route('employee-list'); }
        
        function updateForm($employeeCode) {
                $employee = Employee::where('code', $employeeCode)->firstOrFail();
                return view('employee-update',[
                'title' => "{$this->title} : Update",
                'employee' => $employee,
                ]);
            }   

        function update(Request $request, $employeeCode) {
                    $employee = Employee::where('code', $employeeCode)->firstOrFail();
                    $data = $request->getParsedBody();
                    $employee->fill($data);
                    $employee->save();
                    return redirect()->route('employee-list',[
                    'employee' => $employee->code,
                    ]);
                } 

        function delete($employeeCode) {
                $employee = Employee::where('code', $employeeCode)->firstOrFail();
                $employee->delete();
                return redirect()->route('employee-list');
            }     
    }
