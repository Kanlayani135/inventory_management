@extends('layouts.app')

@section('title', $title)

@section('content')

<main>
  @csrf
  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Employee</li>
        </ol>
      </nav>
      @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
      <table class="table">
    <thead>
      <tr>
        <th scope="col">Code</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Position</th>
        <th scope="col">Work Status</th>
        <th scope="col">Hired Date</th>
        <th></th>
        <th></th>
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
  <nav class="text-center">
      <a href="{{ route('employee-create-form') }}" class="btn btn-info">Create Employee</a>
  </nav>
  {{ $employees->withQueryString()->links() }}
</main>
@endsection