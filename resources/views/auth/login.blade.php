<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
@include ('partials.navbar')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                    @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                        <form action="/login" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="username">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                        <small class="d-block text-center mt-3">Not registered? <a href="register">Register Now!</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>