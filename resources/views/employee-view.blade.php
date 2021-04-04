@extends('layouts.app')

@section('title', $title)

@section('content')

<main>
  @csrf
  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('employee-list') }}">Back</a></li>
          <li class="breadcrumb-item active" aria-current="page">Employee Profile</li>
        </ol>
      </nav>
      <center>
    <table class="table table-striped" style="width: 600px;">
      <tbody>
        <tr>
          <td scope="col">Code</td>
          <td scope="col">{{ $employee->code }}</td>
        </tr>
        <tr>
          <td scope="col">First name</td>
          <td scope="col">{{ $employee->fname }}</td>
        </tr>
        <tr>
          <td scope="col">Last name</td>
          <td scope="col">{{ $employee->lname }}</td>
        </tr>
        <tr>
          <td scope="col">Address</td>
          <td scope="col">{{ $employee->address }}</td>
        </tr>
        <tr>
          <td scope="col">Sex</td>
          <td scope="col">{{ $employee->sex }}</td>
        </tr>
        <tr>
          <td scope="col">Date of Birth</td>
          <td scope="col">{{ $employee->dob }}</td>
        </tr>
        <tr>
          <td scope="col">Age</td>
          <td scope="col">{{ $employee->age }}</td>
        </tr>
        <tr>
          <td scope="col">Telephone Number</td>
          <td scope="col">{{ $employee->tel }}</td>
        </tr>
        <tr>
          <td scope="col">Civil Status</td>
          <td scope="col">{{ $employee->civilstatus }}</td>
        </tr>
        <tr>
          <td scope="col">Position</td>
          <td scope="col">{{ $employee->position }}</td>
        </tr>
        <tr>
          <td scope="col">Department</td>
          <td scope="col">{{ $employee->department }}</td>
        </tr>
        <tr>
          <td scope="col">Division</td>
          <td scope="col">{{ $employee->division }}</td>
        </tr>
          <tr>
          <td scope="col">Work Status</td>
          <td scope="col">{{ $employee->workstatus }}</td>
        </tr>
        <tr>
          <td scope="col">Hired Date</td>
          <td scope="col">{{ $employee->hireddate }}</td>
        </tr>
      </tbody>
    </table>
    </center>
</main>
@endsection