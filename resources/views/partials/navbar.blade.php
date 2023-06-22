<nav class="navbar navbar-expand-lg navbar-dark bg-ungu">
    <div class="container">
        <a class="navbar-brand" href="/">Dukung Karya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $title === "Home" ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === "Lists" ? 'active' : '' }}" href="/lists">List Proyek</a>
                </li>
                @if (Auth::check()) 
                <li class="nav-item">
                    <a class="nav-link {{ $title === "Start" ? 'active' : '' }}" href="/start">Start a Project</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Welcome, {{ auth()->user()->username }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"><i class="bi bi-person"></i> Profil</a>
                        <div class="dropdown-divider"></div>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                        </form>
                    </div>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link {{ $title === "Start" ? 'active' : '' }}" href="/login">Start a Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === "Login" ? 'active' : '' }}" href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ $title === "Register" ? 'active' : '' }}" href="/register">Register</a>
                </li> --}}
                @endauth
            </ul>
        </div>
    </div>
</nav>
