@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="row">
        <h3>Login</h3>
        <form action="{{ route('auth.login.store') }}" method="POST">
            @csrf

            @include('shared.alert')

            <div class="col-12">
                Email : <input type="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="col-12">
                Password : <input type="password" name="password">
            </div>

            <div class="col-12">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
