@extends('layouts.app')

@section('title', $title)

@section('content')

<main>
  @csrf
  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Back</a></li>
        </ol>
      </nav>
      <nav>
        
            <a href="{{ route('employee-create-form') }}" class="btn btn-success">Create Employee</a>
          
      </nav>
      <table class="table">
    <thead>
      <tr>
        <th scope="col">Code</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Address</th>
        <th scope="col">Sex</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">Age</th>
        <th scope="col">Tel</th>
        <th scope="col">Civil Status</th>
        <th scope="col">Position</th>
        <th scope="col">Work Status</th>
        <th scope="col">Hired Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach($employees as $employee)
      <tr>
        <th>
        <a href="{{ route('employee-view', ['employee' => $employee->code,]) }}">
            {{ $employee->code }}
          </a>
        </th>
        <td>
          <em>{{ $employee->fname }}</em>
        </td>
        <td>
          <em>{{ $employee->lname }}</em>
        </td>
        <td>
          <em>{{ $employee->address }}</em>
        </td>
        <td>
          <em>{{ $employee->sex }}</em>
        </td>
        <td>
          <em>{{ $employee->dob }}</em>
        </td>
        <td>
          <em>{{ $employee->age }}</em>
        </td>
        <td>
          <em>{{ $employee->tel }}</em>
        </td>
        <td>
          <em>{{ $employee->civilstatus }}</em>
        </td>
        <td>
          <em>{{ $employee->position }}</em>
        </td>
        <td>
          <em>{{ $employee->workstatus }}</em>
        </td>
        <td>
          <em>{{ $employee->hireddate }}</em>
        </td>
        <td>
        <a href="{{ route('employee-update-form', ['employee' => $employee->code,]) }}" class="btn btn-success" >Update</a>
        </td>
        <td>
        <a href="{{ route('employee-delete', ['employee' => $employee->code,]) }}" class="btn btn-danger" >Delete</a>
    </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $employees->withQueryString()->links() }}
</main>
@endsection