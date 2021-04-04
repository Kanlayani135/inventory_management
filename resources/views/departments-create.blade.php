@extends('layouts.app')

@section('title', $title)

@section('content')
  <form action="{{ route('departments-create') }}" method="post">
    @csrf
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('departments-list') }}">Back</a></li>
          <li class="breadcrumb-item active" aria-current="page">Department Create</li>
        </ol>
      </nav>
<main>
  <center>  
  <table class="table table-striped" style="width: 600px;">
  <thead>
  </thead>
    <tbody>
    <tr>
      <td scope="col" for="department">Department</td>
      <td scope="col"><input type="text" id="department" name="department" /></td>
    </tr>
    <tr>
      <td scope="col" for="department_head">Department Head</td>
      <td scope="col"><input type="text"  id="department_head" name="department_head" /></td>
    </tr>
    </tbody>
  </table>
</center>  
      <button type="submit" class="btn btn-success" >Create</button>
  </form>
</main>
@endsection