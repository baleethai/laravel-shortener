@extends('layouts.auth')

@section('title', 'Register')

@section('content')

<form action="{{ route('auth.register.store') }}" method="POST">
    @csrf

    @include('shared.alert')

    <h1 class="h3 mb-3 fw-normal">Register</h1>

    <div class="form-floating mb-3">
        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Name" required>
        <label for="floatingInput">Name</label>
    </div>

    <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
        <label for="floatingInput">Email</label>
    </div>

    <div class="form-floating mb-3">
        <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Password" required>
        <label for="floatingInput">Password</label>
    </div>

    <div class="form-floating mb-3">
        <input type="password" name="password_confirmation" class="form-control" id="floatingInput" placeholder="Password Confirmation" required>
        <label for="floatingInput">Password Confirmation</label>
    </div>

    <div class="col-12">
        <input type="submit" class="w-100 btn btn-lg btn-primary" value="Sign up">
    </div>

</form>
@endsection
