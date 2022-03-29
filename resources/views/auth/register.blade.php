@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="row">
        <h3>Register</h3>
        <form action="{{ route('auth.register.store') }}" method="POST">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-12">
                Name : <input type="text" name="name" value="{{ old('name') }}">
            </div>
            <div class="col-12">
                Email : <input type="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="col-12">
                Password : <input type="password" name="password">
            </div>
            <div class="col-12">
                Confirm Password : <input type="password" name="password_confirmation">
            </div>
            <div class="col-12">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
