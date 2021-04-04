@extends('layouts.app')
@section('title',$title)

@section('content')

<form action="{{ route('division-update',['division' => $division->id]) }}" method="post">
@csrf
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('division-list') }}">Back</a></li>
    <li class="breadcrumb-item active" aria-current="page">Division Update</li>
  </ol>
</nav>
    <main>
    <center>
        <table class="table table-striped" style="width: 600px;">
            <thead>
            </thead>
            <tbody>
                <tr>
                <td scope="col" for="division">Division</td>
                <td scope="col"><input type="text" id="division" name="division" value="{{ old('division')?? $division->division }}"/></td>
                </td>
                </tr>
                <tr>
                <td scope="col" for="division_head">Division Head</td>
                <td scope="col"><input type="text"  id="division_head" name="division_head" value="{{ old('division_head')?? $division->division_head }}"/></td>
                </tr>
            </tbody>
        </table>
      </center>
        <button type="submit" class="btn btn-success">Edit</i></button>
    </form>
    </main>
@endsection