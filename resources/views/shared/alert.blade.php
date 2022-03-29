@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('status'))
    <div class="alert alert-success">
        <ul>
            <li>{{ session('status') }}</li>
        </ul>
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{{ session('error') }}</li>
        </ul>
    </div>
@endif




