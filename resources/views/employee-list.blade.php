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
        <nav class="text-center">
        @if(Auth::user()->guest) <a href="{{ route('employee-create-form') }}" class="btn btn-info">create your profile</a>@endif
        @if(Auth::user()->is_admin) <a href="{{ route('employee-create-form') }}" class="btn btn-info">create new employee</a>@endif
  </nav><br />
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
      </tr>
    </thead>
    <tbody>
      @foreach($employees as $employee)
      <tr>
        <th>
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
        @if(Auth::user()->is_admin)
        <a href="{{ route('employee-update-form', ['employee' => $employee->code,]) }}" class="btn btn-success" >Update</a>
        @endif
        </td>
        <td>
        @if(Auth::user()->is_admin)
        <a href="{{ route('employee-delete', ['employee' => $employee->code,]) }}" class="btn btn-danger" >Delete</a>
        @endif
    </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  {{ $employees->withQueryString()->links() }}
</main>
@endsection