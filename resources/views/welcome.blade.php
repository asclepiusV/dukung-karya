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
    </style>
</head>


<body>
    @include ('partials.navbar')
    <div class="jumbotron text-center">
        <h1 class="display-4">Selamat datang di Dukung Karya</h1>
        <p class="lead">Jelajahi proyek luar biasa dan bantu wujudkan menjadi nyata.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Get Started</a>
    </div>


    <div class="container">
        <div class="row mb-5">
            @foreach ($project as $item)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $item["project_image"] }}" class="card-img-top image" alt="Project Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item["project_name"] }}</h5>
                        <p class="card-text">{{ $item["project_description"] }}</p>
                        <a href="/projects/{{ $item["slug"] }}" class="btn btn-primary">Support Project</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>