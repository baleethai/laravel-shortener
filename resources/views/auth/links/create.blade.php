@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="row">
        <h3>Register</h3>
        <form action="{{ route('auth.links.store') }}" method="POST">
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
                Long URL : <input type="text" name="long_url" value="{{ old('long_url') }}">
            </div>
            <div class="col-12">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
