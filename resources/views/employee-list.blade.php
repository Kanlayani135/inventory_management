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
        <button type="button" class="btn btn-light">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>
    <i class="bi bi-plus-circle"><a href="{{ route('employee-create') }}" }}>Create New Employee</a></i></button>
      <table class="table">
    <thead>
      <tr>
        <th scope="col">Code</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Position</th>
        <th scope="col">Work Status</th>
        <th scope="col">Hired Date</th>
        <th scope="col">Action</th>
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
        <td>
        <a href="{{ route('employee-view', ['employee' => $employee->code,]) }}" class="btn btn-success" >Show</a>
        <a href="{{ route('employee-update-form', ['employee' => $employee->code,]) }}" class="btn btn-primary" >Edit</a>
        <a href="{{ route('employee-delete', ['employee' => $employee->code,]) }}" class="btn btn-danger" >Delete</a>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $employees->withQueryString()->links() }}
</main>
@endsection