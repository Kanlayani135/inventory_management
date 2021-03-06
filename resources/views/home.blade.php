@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    You are normal user.
                </div>
                <a href="{{ route('homepage')}}"><button class="btn btn-primary"  type="button">Go to HR Management System</button> </a>
            </div>
        </div>
    </div>
</div>
@endsection
