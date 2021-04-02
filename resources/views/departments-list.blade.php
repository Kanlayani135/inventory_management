@extends('layouts.app')

@section('content')
    <form action=" ">
@csrf
    <main>
        <table class="table table-striped" style="width: 600px;">
          
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
                </tr>
            @endforeach
            </tbody>
        </table>
    </form>
    </main>
@endsection
