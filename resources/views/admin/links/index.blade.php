@extends('admin.layouts.app')

@section('title', 'Links')

@section('content')

    <div class="row">

        <h3>Links</h3>

        @include('shared.alert')

        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-dark">
                            <th>No</th>
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
                                    <a href="{{ route('auth.links.delete', [$link]) }}">Delete</a>
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
                {{ $links->links() }}
            </div>
        </div>

    </div>
@endsection
