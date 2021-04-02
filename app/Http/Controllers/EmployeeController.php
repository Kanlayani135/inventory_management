<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    private $title = 'Employee';
    function list() {
    return view('employee-list', [
    'title' => "{$this->title} : List",
    'employees' => Employee::orderBy('code')->get(),
    ]);
    }

    function show($employeeCode) {
        $employee = Employee::where('code', $employeeCode)->firstOrFail();
        return view('employee-view', [
        'title' => "{$this->title} : View",
        'employee' => $employee,
        ]);
        }

    
    }
