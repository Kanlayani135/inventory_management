@extends('layouts.app')

@section('title',$title)

@section('content')

    <form action="{{ route('departments-list') }} " method="get">
@csrf
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Departments</li>
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
    <main>
    <div class="text-center">
        <label> @if(Auth::user()->is_admin)<a href="{{ route('departments-create') }}" class="btn btn-info" >Create Department</a> @endif</label>
    </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Department</th>
					<th scope="col">Department Head</th>
                    <th scope="col"></th>
                    <th scope="col">Action</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($departments as $department)
            <tr>
                <th>{{ $department->id }}</th>
                <td>{{ $department->department }}</td>
                <td>{{ $department->department_head }}</td>
                <td><a href="{{ route('department-view', ['department' =>$department->id,]) }}" class="btn btn-success">Show</a>
                @if(Auth::user()->is_admin)
                <td><a href="{{route('department-update',['department'=>$department->id,])}}" class="btn btn-warning">Update</a>
                @endif
                </td>
                <td>
                @if(Auth::user()->is_admin)
                <a href="{{route('department-delete',['department'=>$department->id,])}}" class="btn btn-danger">Delete</a>
                @endif
               
            </tr>
            @endforeach
            </tbody>
        </table>
    </form>
    
    </main>
@endsection
