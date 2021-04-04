@extends('layouts.app')

@section('title', $title)

@section('content')

<main>
<form action="{{ route('department-update', ['department' => $departments->id,]) }}" method="post">
    @csrf
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('departments-list') }}">Back</a></li>
          <li class="breadcrumb-item active" aria-current="page">Department Update</li>
        </ol>
      </nav>
  <center>
    <table class="table table-striped" style="width: 600px;">
            <thead>
            </thead>
      <tr>
        <td  scope="col"><label for="department"> Department</label></td>
        <td  scope="col"><input id="department" type="text" name="department" value="{{ old('department')?? $departments->department }}"/></td>
      </tr>
      <tr>
        <td  scope="col"><label for="department_head"> Department Head</label></td>
        <td  scope="col"><input id="department_head" type="text" name="department_head" value="{{ old('department_head')?? $departments->department_head }}"/></td>
      </tr>
    </table>
  </center>
      <button type="submit" class="btn btn-success" >Edit</button>
  </form>
</main>
@endsection