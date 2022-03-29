@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="row">
        <h3>Links</h3>
        @include('shared.alert')
        <div class="row">
            <div class="col-12">
                <a href="{{ route('auth.links.create') }}">Create Link</a>
            </div>
        </div>
        <table width="70%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Short Url</th>
                    <th>Total Click</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if ($links)
                    @foreach($links as $link)
                    <tr>
                        <td>{{ $link->id }}</td>
                        <td>{{ $link->name }}</td>
                        <td>
                            <a href="{{ route('shortlink.index', [$link->short_url]) }}" target="_blank">
                                {{ env('APP_URL') . '/' . $link->short_url }}
                            </a>
                        </td>
                        <td>{{ $link->total_click }}</td>
                        <td>
                            <a href="{{ route('auth.links.delete', [$link]) }}">Hide</a>
                        </td>
                    </tr>
                    @endforeach
                @else
                <tr>
                    <td>Not data.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
