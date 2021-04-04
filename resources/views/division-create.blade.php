@extends('layouts.app')
@section('title',$title)

@section('content')

<form action="{{ route('division-create') }}" method="post">
@csrf
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('division-list') }}">Back</a></li>
    <li class="breadcrumb-item active" aria-current="page">Division Create</li>
  </ol>
</nav>
    <main>
        <table class="table table-striped" style="width: 600px;">
          
            <thead>
            </thead>
            <tbody>
                <tr>
                <td scope="col" for="division">Division</td>
                <td scope="col"><input type="text" id="division" name="division" /></td>
                </tr>
                <tr>
                <td scope="col" for="division_head">Division Head</td>
                <td scope="col"><input type="text"  id="division_head" name="division_head" /></td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-success">Create</i></button>
    </form>
    </main>
@endsection