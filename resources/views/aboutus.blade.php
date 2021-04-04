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
    <h1 class="display-4">Hello, EveryOne !</h1>
      <p class="lead">This is a  Project Final Group of Us  </p>
    <hr class="my-4">
      <div class="alert alert-dark" role="alert"><strong>622110135</strong>  Kanlayanee Baisukhan</div>
      <div class="alert alert-dark" role="alert"><strong>622110177</strong> Thawanrat Tanbud</div>
      <div class="alert alert-dark" role="alert"><strong>622110204</strong>  Pattaraporn Kompang</div>
      <hr class="my-4">
      <p class="lead">WE HOPE YOU CAN FEEL GOOD</p>
  </div>
</main>
@endsection