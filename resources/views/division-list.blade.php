@extends('layouts.app')
@section('title',$title)

@section('content')
<form action="{{route('division-list')}} "method="get">
@csrf
{{ $divisions->withQueryString()->links() }}
    <main>
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Division</li>
  </ol>
</nav>
<button type="button" class="btn btn-success">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>
    <i class="bi bi-plus-circle"><a href="{{ route('division-create') }}" }}>Add new</a></i></button>
        <table class="table table-striped" style="width: 600px;">
          
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Division</th>
					<th scope="col">Division Head</th>
                </tr>
            </thead>
            <tbody>
            @foreach($divisions as $division)
                <tr>
                    <th scope="row">{{ $division->id }}</th>
                    <td>{{ $division->division }}</td>
                    <td>{{ $division->division_head }}</td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </form>
    </main>
@endsection