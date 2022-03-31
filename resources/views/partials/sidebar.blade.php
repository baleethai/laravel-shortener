@if (auth()->check())

<h4 class="d-flex align-items-center mb-3">
    <span>Menu</span>
</h4>
<ul class="list-group mb-3">
    <li class="list-group-item d-flex">
        <a href="{{ route('auth.dashboard.index') }}" class="text-decoration-none @if (in_array(Route::currentRouteName(), ['auth.dashboard.index'])) text-success @endif">
            Dashboard
        </a>
    </li>
    <li class="list-group-item d-flex">
        <a href="{{ route('auth.links.index') }}" class="text-decoration-none @if (in_array(Route::currentRouteName(), ['auth.links.index', 'auth.links.create'])) text-success @endif">
            Link Management
        </a>
    </li>
    <li class="list-group-item d-flex">
        <a href="{{ route('auth.logout.index') }}" class="text-decoration-none @if (in_array(Route::currentRouteName(), ['auth.logout.index'])) text-success @endif">
            Logout
        </a>
    </li>
</ul>

@else


    <h4 class="d-flex align-items-center mb-3">
        <span>Menu</span>
    </h4>
    <ul class="list-group mb-3">
        <li class="list-group-item d-flex">
            <a href="{{ route('auth.admin.dashboard.index') }}" class="text-decoration-none @if (in_array(Route::currentRouteName(), ['auth.admin.dashboard.index'])) text-success @endif">
                Dashboard
            </a>
        </li>
        <li class="list-group-item d-flex">
            <a href="{{ route('auth.admin.links.index') }}" class="text-decoration-none @if (in_array(Route::currentRouteName(), ['auth.admin.links.index'])) text-success @endif">
                Link Management
            </a>
        </li>
        <li class="list-group-item d-flex">
            <a href="{{ route('auth.logout.admin.index') }}" class="text-decoration-none @if (in_array(Route::currentRouteName(), ['auth.admin.logout.index'])) text-success @endif">
                Logout
            </a>
        </li>
    </ul>

@endif
