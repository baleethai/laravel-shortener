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
        <a href="{{ route('auth.links.index') }}" class="text-decoration-none @if (in_array(Route::currentRouteName(), ['auth.links.index'])) text-success @endif">
            Link Management
        </a>
    </li>
    <li class="list-group-item d-flex">
        <a href="{{ route('auth.logout.index') }}" class="text-decoration-none @if (in_array(Route::currentRouteName(), ['auth.logout.index'])) text-success @endif">
            Logout
        </a>
    </li>
</ul>
