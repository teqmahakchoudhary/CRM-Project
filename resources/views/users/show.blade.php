
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>User Details</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3"><strong>ID:</strong></div>
                        <div class="col-md-9">{{ $user->id }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3"><strong>Name:</strong></div>
                        <div class="col-md-9">{{ $user->name }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3"><strong>Email:</strong></div>
                        <div class="col-md-9">{{ $user->email }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3"><strong>Created At:</strong></div>
                        <div class="col-md-9">{{ $user->created_at->format('M d, Y H:i') }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3"><strong>Updated At:</strong></div>
                        <div class="col-md-9">{{ $user->updated_at->format('M d, Y H:i') }}</div>
                    </div>
                    <hr>

                    <div class="mt-3">
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to List</a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
