@extends('layouts.app')

@section('title',$title)

@section('content')

    <form action="{{ route('departments-list') }} " method="get">
@csrf
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <main>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Department</th>
					<th scope="col">Department Head</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($departments as $department)
            <tr>
                <th>{{ $department->id }}</th>
                <td>{{ $department->department }}</td>
                <td>{{ $department->department_head }}</td>
                <td><a href="#" class="btn btn-success" >Update</a></td>
                <td><a href="{{route('department-delete',['department'=>$department->id,])}}"class="btn btn-danger">Delete</a>
               
                
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </form>
    <div class="text-center">
        <label><a href="{{ route('departments-create') }}" class="btn btn-info" >Create Department</a></label>
    </div>
    </main>
@endsection
