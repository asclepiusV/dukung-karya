<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kickstarter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .image{
            width: 100%;
            height: 200px;
            object-fit: cover;
            object-position: 100% 8%;
        }
        body {
            background-color: #f8f9fa;
        }

        .jumbotron {
            /* background-image: url('background.jpg'); */
            background-size: cover;
            background-position: center;
            color: black;
            padding: 200px 0;
        }

        .project-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        transition: transform 0.3s;
    }

    .project-card:hover {
        transform: translateY(-10px);
    }

    .project-card img {
        height: 200px;
        object-fit: cover;
    }

    .project-card .card-body {
        padding: 20px;
    }

    .project-card .card-title {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .project-card .card-text {
        font-size: 16px;
        margin-bottom: 20px;
        height: 60px;
        overflow: hidden;
        line-height: 1.2em;
    }

    .project-card .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-size: 16px;
        width: 100%;
    }

    .footer-section {
            background-color: #343a40;
            padding: 40px 0;
            color: #fff;
            text-align: center;
        }

        .footer-section p {
            margin-bottom: 0;
        }
    </style>
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                    @auth 
                    <li class="nav-item">
                        <a class="nav-link {{ $title === "Start" ? 'active' : '' }}" href="/start">Start a Project</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Welcome, {{ auth()->user()->username }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"><i class="bi bi-layout-text-sidebar-reverse"></i>Profil</a>
                        <div class="dropdown-divider"></div>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</a>
                            </form>
                        </div>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link {{ $title === "Start" ? 'active' : '' }}" href="/login">Start a Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === "Login" ? 'active' : '' }}" href="/login" class="nav-link"><i class = "bi bi-box-arrow-in-right"></i>Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === "Register" ? 'active' : '' }}" href="/register">Register</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
