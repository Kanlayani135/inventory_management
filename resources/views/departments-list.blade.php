@extends('layouts.app')

@section('content')
    <form action=" ">
@csrf
    <main>
        <table class="centerized top-header" style="width: 600px;">
            <colgroup>
                <col style="width: 6ch;" />
                <col />
                <col style="width: 20ch;" />
            </colgroup>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Department</th>
					<th>Department Head</th>
                </tr>
            </thead>
            <tbody>
            @foreach($departments as $departments)
                <tr>
                    <td>{{ $departments->id }}</td>
                    <td>{{ $departments->department }}</td>
                    <td>{{ $departments->department head }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </form>
    </main>
@endsection
