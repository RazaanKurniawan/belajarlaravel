<header data-bs-theme="dark">

    <div class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="{{ route('post.index') }}" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                <strong>RPL 1 BLOG</strong>
            </a>

            @auth
            <a href="{{ route('home') }}" class="btn btn-primary">Dashboard</a>
            @endauth

            @guest
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                </li>
                <li class="nav-item offset-1">
                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                </li>
            </ul>
            @endguest

        </div>
    </div>
</header>
