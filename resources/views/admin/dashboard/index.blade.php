@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <div class="row">

        <h3>Dashboard</h3>

        <form action="{{ route('auth.admin.dashboard.update') }}" method="POST">
            @csrf

            @include('shared.alert')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ auth()->user()->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ auth()->user()->email }}" required disabled>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-success mb-3" value="Update Profile">
            </div>

        </form>
    </div>

@endsection
