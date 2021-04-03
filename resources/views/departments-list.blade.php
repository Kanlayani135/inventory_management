@extends('layouts.app')

@section('title',$title)

@section('content')

    <form action="{{ route('departments-list') }} " method="get">
@csrf
    <main>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Department</th>
					<th scope="col">Department Head</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($departments as $departments)
            <tr>
                <th>{{ $departments->id }}</th>
                <td>{{ $departments->department }}</td>
                <td>{{ $departments->department_head }}</td>
                <td><a href="#" class="btn btn-success" >Update</a></td>
                <td><a href="#" class="btn btn-danger">Delete</a></td>
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
