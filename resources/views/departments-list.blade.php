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
    <div class="text-center">
    <button type="button" class="btn btn-light">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
        </svg>
        <i class="bi bi-plus-circle"><a href="{{ route('departments-create') }}" }}>Create New Department</a></i></button>
    </div>
    <main>
<<<<<<< HEAD
        <table class="table table-striped ">
=======
    <div class="text-center">
        <label> @if(Auth::guest())<a href="{{ route('departments-create') }}" class="btn btn-info" >Create Department</a> @endif</label>
    </div>
        <table class="table table-striped">
>>>>>>> 41274f6084b1a5bb7d8394ac346b4eb13ba2b482
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Department</th>
					<th scope="col">Department Head</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($departments as $department)
            <tr>
                <th>{{ $department->id }}</th>
                <td>{{ $department->department }}</td>
                <td>{{ $department->department_head }}</td>
<<<<<<< HEAD
                <td>
                    <a href="{{route('department-view', ['department' =>$department->id,]) }}" class="btn btn-success">Show</a>
                    <a href="{{route('department-update',['department'=>$department->id,])}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('department-delete',['department'=>$department->id,])}}" class="btn btn-danger">Delete</a>
=======
                <td><a href="{{ route('department-view', ['department' =>$department->id,]) }}" class="btn btn-success">Show</a>
                @if(Auth::user()->is_admin)
                <td><a href="{{route('department-update',['department'=>$department->id,])}}" class="btn btn-warning">Update</a>
                @endif
                </td>
                <td>
                @if(Auth::user()->is_admin)
                <a href="{{route('department-delete',['department'=>$department->id,])}}" class="btn btn-danger">Delete</a>
                @endif
                <td><a href="{{route('department-view', ['department' =>$department->id,]) }}" class="btn btn-success">Show</a>
                <td><a href="{{route('department-update',['department'=>$department->id,])}}" class="btn btn-warning">Update</a></td>
                <td><a href="{{route('department-delete',['department'=>$department->id,])}}" class="btn btn-danger">Delete</a>
>>>>>>> 41274f6084b1a5bb7d8394ac346b4eb13ba2b482
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </form>
<<<<<<< HEAD
</main>
=======
    
    </main>
>>>>>>> 41274f6084b1a5bb7d8394ac346b4eb13ba2b482
@endsection
