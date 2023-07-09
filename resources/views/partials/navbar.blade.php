<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('storage/images/Logo.png') }}"alt="Logo" width="30" height="24" class="d-inline-block align-text-top img-logo">
            <b>Dukung Karya</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $title === "Home" ? 'active' : '' }}" href="/"><b>Home</b></a>
                </li>
                @if (auth()->user())
                    @if (auth()->user()->is_admin)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>List Kategori Proyek 
                            </b></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                @foreach ($categories as $category)
                                    <a class="dropdown-item" href="/admin/get-projects-by-category/{{$category['slug']}}"><b>{{$category['name']}}</b></a>
                                @endforeach
                            
                        </div>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link {{ $title === "Lists" ? 'active' : '' }}" href="/lists"><b>List Proyek </b></a>
                    </li>
                    @endif
                @else
                <li class="nav-item">
                    <a class="nav-link {{ $title === "Lists" ? 'active' : '' }}" href="/lists"><b>List Proyek </b></a>
                </li>
                @endif
                
                @if (Auth::check()) 
                <li class="nav-item">
                    <a class="nav-link {{ $title === "Start" ? 'active' : '' }}" href="/start"><b>Start a Project</b></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b>Welcome, {{ auth()->user()->username }}
                        </b></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"><i class="bi bi-person"></i> <b>Profil</b></a>
                        @if (auth()->user()->is_admin == 1)
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/admin"><i class="bi bi-person-gear"></i> <b>Admin Page</b></a>
                        @endif
                        <div class="dropdown-divider"></div>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> <b>Logout</b></button>
                        </form>
                    </div>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link {{ $title === "Start" ? 'active' : '' }}" href="/login"><b>Start a Project</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === "Login" ? 'active' : '' }}" href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> <b>Login</b></a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ $title === "Register" ? 'active' : '' }}" href="/register">Register</a>
                </li> --}}
                @endauth
            </ul>
        </div>
    </div>
</nav>
