@extends('layouts.app')

@section('title',$title)

@section('content')

    <form action=" ">
@csrf
    <main>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Department</th>
					<th scope="col">Department Head</th>
                </tr>
            </thead>
            <tbody>
            @foreach($departments as $departments)
            <tr>
                <th scope="row">{{ $departments->id }}</th>
                <td>{{ $departments->department }}</td>
                <td>{{ $departments->department_head }}</td>
                <td><a href="#" class="btn btn-success">Read</a></td>
                <td><a href="#" class="btn btn-warning">Update</a></td>
                <td><a href="{{route('departments-delete',['department'=> $departments->id,]) }}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </form>
    </main>
@endsection
