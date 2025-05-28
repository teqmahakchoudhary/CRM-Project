
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>Welcome {{ Auth::user()->name }}!</h5>
                    <p>You are logged in successfully.</p>
                    
                    <div class="mt-3">
                        <a href="{{ route('users.index') }}" class="btn btn-primary">Manage Users</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
