@extends('layouts.app')

@section('content')
<main>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">About Us</li>
    </ol>
  </nav>

  <div class="jumbotron">
    <h1 class="display-4">Hello, EveryOne!</h1>
      <p class="lead">This is a  Project Final Group of Us  </p>
      <p class="lead">WE HOPE YOU CAN FEEL GOOD</p>
    <hr class="my-4">
      <div class="alert alert-dark" role="alert">622110135  Kanlayanee Baisukhan</div>
      <div class="alert alert-light" role="alert">622110177 Thawanrat Tanbud</div>
      <div class="alert alert-dark" role="alert">622110204  Pattaraporn Kompang</div>
  </div>
</main>
@endsection