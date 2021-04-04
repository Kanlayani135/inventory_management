@extends('layouts.app')

@section('title',$title)

@section('content')

    <form action="{{ route('departments-list') }} " method="get">
@csrf
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('departments-list') }}">Back</a></li>
            </ol>
    </nav>
<main>
    <table class="table table-striped">
            <tbody>
               
                <tr>
                    <th scope="col">Department</th>
                    <th scope="col">{{ $departments->department }}</th>
                    </tr>
                <tr>
					<th scope="col">Department Head</th>
                    <th scope="col">{{ $departments->department_head }}</th>
                    </tr>
            </tbody>
    </table>
</main>
@endsection