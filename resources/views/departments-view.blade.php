@extends('layouts.app')

@section('title',$title)

@section('content')

    <form action="{{ route('departments-list') }} " method="get">
@csrf
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('departments-list') }}">Back</a></li>
            <li class="breadcrumb-item active" aria-current="page">Department View</li>
            </ol>
    </nav>
<main>
    <center>
    <table class="table table-striped" style="width: 600px;">
        <thead></thead>
            <tbody>
                <tr>
                    <td scope="col">Department</td>
                    <td scope="col">{{ $departments->department }}</td>
                </tr>
                <tr>
					<td scope="col">Department Head</td>
                    <td scope="col">{{ $departments->department_head }}</td>
                </tr>
            </tbody>
        </table>
    </center>
    </main>
@endsection