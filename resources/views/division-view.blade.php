@extends('layouts.app')

@section('title',$title)

@section('content')

@csrf
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="{{ route('division-list') }}">Back</a></li>
      <li class="breadcrumb-item active" aria-current="page">Division View</li>
    </ol>
  </nav>

    <main>
      <center>
        <table class="table table-striped" style="width: 600px;">
          <thead></thead>
            <tbody>
                <tr>
                  <td scope="col" for="division">Division</td>
                  <td scope="col">{{ $division->division }}</td>
                </tr>
                <tr>
                  <td scope="col" for="division_head">Division Head</td>
                  <td scope="col">{{  $division->division_head }}</td>
                </tr>
            </tbody>
        </table>
      </center>
    </form>
  </main>
@endsection