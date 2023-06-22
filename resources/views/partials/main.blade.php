<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .image{
            width: 100%;
            height: 200px;
            object-fit: cover;
            object-position: 100% 8%;
        }

        body {
            background-color: #f8f9fa;
            position: relative; /* Tambahkan posisi relatif pada body */
            min-height: 100vh; /* Atur tinggi minimal body setara dengan tinggi viewport */
            margin: 0;
            padding-bottom: 100px;
            padding-top: 50px;
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
        position: absolute; /* Ubah posisi menjadi absolut */
        bottom: 0;
        width: 100%;
        height: 100px; /* Atur tinggi footer sesuai kebutuhan */
        background-color: #343a40;
        padding: 40px 0;
        color: #fff;
        text-align: center;
    }

    .footer-section p {
        margin-bottom: 0;
    }
    .navbar {
        /* ini untuk navbar selalu di layar atas */
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999;
    }
    </style>
</head>
<body>
    @include ('partials.navbar')

    @yield('container')

    <section class="footer-section">
        <div class="container">
            <p>&copy; 2023 Dukung Karya. All rights reserved.</p>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
    
</html>