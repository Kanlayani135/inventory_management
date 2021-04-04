@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('aboutus') }}">About Us<span class="sr-only">(current)</span></a>
      </li>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      @if(Auth::user()->is_admin)
        <a class="nav-link" href="{{ route('employee-list') }}">Employee <span class="sr-only">(current)</span></a>
        @endif
      </li>

      <li class="nav-item dropdown">
      @if(Auth::user()->is_admin)
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Utilities
        </a>
        @endif
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        @if(Auth::user()->is_admin)
          <a class="dropdown-item" href="{{ route('departments-list') }}">Department</a>
          @endif
          @if(Auth::user()->is_admin)
          <a class="dropdown-item" href="{{ route('division-list') }}">Division</a>
          @endif
          
        </div>
        </li>
      
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
    @if(Auth::user()->is_admin)
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      @endif
     
    </form>
    
   
  </div>
</nav>
<img src="{{ asset("images/photo.jpg") }}" style="width:100%;"/>
@endsection
