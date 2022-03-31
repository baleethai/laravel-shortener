<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_URL') }} - @yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/custom.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>
<body class="bg-light">

<div class="container">
    <main>

        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{ asset('assets/img/logo.png') }}" alt="" width="72" height="57">
            <h2>{{ env('APP_NAME') }}</h2>
        </div>

        <div class="row">

            <div class="col-md-5 col-lg-4">

                @include('admin.partials.sidebar')

            </div>
            <div class="col-md-7 col-lg-8">

                @yield('content')

            </div>

        </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2022 Laravel Shortener</p>
    </footer>
</div>


<script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>


</body>
</html>
