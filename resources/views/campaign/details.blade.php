<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
@include ('partials.navbar')
    <div class="container">
        <h1 class="mt-5">{{ $project["project_name"] }}</h1>
        <div class="row mt-4">
            <div class="col-md-6">
                <img src="{{ $project['project_image'] }}" class="card-img-top" alt="Project Image">
            </div>
            <div class="col-md-6">
                <h5>Deskripsi Proyek</h5>
                <p>{{ $project["project_description"] }}</p>
                <h5>Category</h5>
                <p>Technology</p>
                <h5>Funding Goal</h5>
                <p>$10,000</p>
                <h5>Campaign Duration</h5>
                <p>30 days</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>