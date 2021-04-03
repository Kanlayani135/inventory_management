@extends('layouts.app')

@section('title', $title)

@section('content')

<main>
 
    <table class>
      <tbody>
        <tr>
          <td class="field-label">Code ::</td>
          <td class="type">{{ $employee->code }}</td>
        </tr>
        <tr>
          <td class="field-label">First name ::</td>
          <td class="type">{{ $employee->fname }}</td>
        </tr>
        <tr>
          <td class="field-label">Last name ::</td>
          <td class="type">{{ $employee->lname }}</td>
        </tr>
        <tr>
          <td class="field-label">Address ::</td>
          <td class="type">{{ $employee->address }}</td>
        </tr>
        <tr>
          <td class="field-label">Sex ::</td>
          <td class="type">{{ $employee->sex }}</td>
        </tr>
        <tr>
          <td class="field-label">Date of Birth ::</td>
          <td class="type">{{ $employee->dob }}</td>
        </tr>
        <tr>
          <td class="field-label">Age ::</td>
          <td class="type">{{ $employee->age }}</td>
        </tr>
        <tr>
          <td class="field-label">Telephone Number ::</td>
          <td class="type">{{ $employee->tel }}</td>
        </tr>
        <tr>
          <td class="field-label">Civil Status ::</td>
          <td class="type">{{ $employee->civilstatus }}</td>
        </tr>
        <tr>
          <td class="field-label">Position ::</td>
          <td class="type">{{ $employee->position }}</td>
        </tr>
        <tr>
          <td class="field-label">Department ::</td>
          <td class="type">{{ $employee->department_id }}</td>
        </tr>
        <tr>
          <td class="field-label">Division ::</td>
          <td class="type">{{ $employee->division_id }}</td>
        </tr>
          <tr>
          <td class="field-label">Work Status ::</td>
          <td class="type">{{ $employee->workstatus }}</td>
        </tr>
        <tr>
          <td class="field-label">Hired Date ::</td>
          <td class="type">{{ $employee->hireddate }}</td>
        </tr>
        </tr>

      </tbody>
    </table>
    </div>
    <div>
    </div>
    
  
</main>
@endsection