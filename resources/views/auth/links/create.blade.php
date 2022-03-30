@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="row">

        <h3>Create link</h3>

        <form action="{{ route('auth.links.store') }}" method="POST">
            @csrf

            @include('shared.alert')

            <div class="mb-3">
                <label for="long_url" class="form-label">Long URL</label>
                <input type="text" name="long_url" class="form-control" id="long_url" placeholder="{{ env('APP_URL') }}" value="{{ old('long_url') }}" required>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-success mb-3" value="Create Link">
            </div>

        </form>
    </div>
@endsection
