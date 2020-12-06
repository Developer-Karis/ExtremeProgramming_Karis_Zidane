<div class="bg-dark p-3">
    <ul class="container nav">
        @if (Route::has('login'))
        @auth
        <li class="nav-item">
            <a href="{{ url('/home') }}" class="nav-link text-white ml-5 text-sm text-gray-700 underline">Home</a>
        </li>
        @else
        <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link text-white text-sm text-gray-700 underline">Login</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
            <a href="{{ route('register') }}" class="nav-link mr-5 text-white text-gray-700 underline">Register</a>
        </li>
        @endif
        @endauth
        @endif

        <li class="nav-item">
            <a class="nav-link text-white" href="/create-avatar">Créer un Avatar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="/users">Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="/avatars">Avatars</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link text-white" href="/galerie">Galeries</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="/createGalerie">Create Galerie</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="/picture">Add pictures</a>
        </li>
    </ul>
</div>