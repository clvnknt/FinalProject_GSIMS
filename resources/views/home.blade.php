@extends('layouts.app')

@section('content')
<link href="{{ asset('assets/css/welcome.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login Status') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <a class="btn btn-primary" href="dashboard" role="button">Continue to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
