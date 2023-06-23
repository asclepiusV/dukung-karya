    @extends('partials.main')

    @section('container')
    <div class="container" style="max-width:900px;">
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
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </button>
                    </div>     
                    @endif       
                        <form action="/login" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="username">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Login</button>
                        </form>
        
                    </div>
                    <small class="d-block text-center mt-2 mb-4">Belum Registrasi? <a href="register">Registrasi</a></small>
                </div>
            </div>
        </div>
    </div>

    @endsection