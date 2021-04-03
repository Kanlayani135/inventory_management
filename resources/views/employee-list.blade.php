@extends('layouts.app')

@section('title', $title)

@section('content')

<main>

      <nav>
        <ul>
          <li>
            <a href="{{ route('employee-create-form') }}">Create Employee</a>
          </li>
        </ul>
      </nav>
      <table class="table">
    <thead>
      <tr>
        <th scope="col">Code</th>
        <th scope="col">fname</th>
        <th scope="col">lname</th>
        <th scope="col">address</th>
        <th scope="col">sex</th>
        <th scope="col">dob</th>
        <th scope="col">age</th>
        <th scope="col">tel</th>
        <th scope="col">civilstatus</th>
        <th scope="col">position</th>
        <th scope="col">workstatus</th>
        <th scope="col">hireddate</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($employees as $employee)
      <tr>
        <th>
        <a href="{{ route('employee-view', [
              'employee' => $employee->code,
              ]) }}">
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
        <a href="{{ route('employee-update-form', [
        'employee' => $employee->code,
    ]) }}">Update</a>
        </td>
        <td>
        <a href="{{ route('employee-delete', [
        'employee' => $employee->code,
    ]) }}">Delete</a>
    </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</main>
@endsection