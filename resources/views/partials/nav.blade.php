<div class="navbar">
    <ul class="d-flex">
        <li class="px-3 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
            <a href="{{ route('home')}}">Home</a>
        </li>
        <li class="px-3 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
            <a href="{{ route('about')}}">about</a>
        </li>
        <li class="px-3 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
            <a href="{{ route('home')}}">Home</a>
        </li>
        <li class="px-3 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
            <a href="{{ route('home')}}">Home</a>
        </li>
    </ul>
</div>
