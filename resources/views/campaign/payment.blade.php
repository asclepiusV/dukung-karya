<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Pembayaran Donasi untuk Proyek {{$project['project_name']}}</h1>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">{{ $project['project_name'] }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Amount to Donate</h6>
                <p class="card-text">$100</p>
                <h6 class="card-subtitle mb-2 text-muted">Informasi Pembayaran</h6>
                <form>
                    <div class="form-group">
                        <label for="nameOnCard">Name on Card</label>
                        <input type="text" class="form-control" id="nameOnCard" placeholder="Enter name on card">
                    </div>
                    <div class="form-group">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" placeholder="Enter card number">
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="expirationDate">Expiration Date</label>
                            <input type="text" class="form-control" id="expirationDate" placeholder="MM/YY">
                        </div>
                        <div class="col">
                            <label for="cvv">CVV</label>
                            <input type="text" class="form-control" id="cvv" placeholder="CVV">
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary">Submit Payment</button>
                        <a href="/projects/{{$project['slug']}}" class="btn btn-danger">Cancel</a>
                        <button type="button" class="btn btn-success">GoPay</button>
                        <button type="button" class="btn btn-info">OVO</button>
                        <button type="button" class="btn btn-warning">Dana</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>