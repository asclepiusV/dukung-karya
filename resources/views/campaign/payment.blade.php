@extends ('partials.main')

<script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-Om4g1GPky-PGwInY"></script>

    

@section('container')
<h1 class="mt-5 text-center">Pembayaran Donasi untuk Proyek {{$project['project_name']}}</h1>
    <div class="container mb-4" style="max-width:800px;">
        
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
                            
                        </div>
                    </form>
                    <button id="pay-button">Pay!</button>
                            <script type="text/javascript">

                            // For example trigger on button clicked, or any time you need
                            
                            var payButton = document.getElementById('pay-button');
                            payButton.addEventListener('click', function () {

                                // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                                window.snap.pay('{{ $snap_token }}', {
                                        onSuccess: function(result){
                                            /* You may add your own implementation here */
                                            alert("payment success!"); console.log(result);
                                        },
                                        onPending: function(result){
                                            /* You may add your own implementation here */
                                            alert("wating your payment!"); console.log(result);
                                        },
                                        onError: function(result){
                                            /* You may add your own implementation here */
                                            alert("payment failed!"); console.log(result);
                                        },
                                        onClose: function(){
                                            /* You may add your own implementation here */
                                            alert('you closed the popup without finishing the payment');
                                        }
                                        });
                                // customer will be redirected after completing payment pop-up
                            });
                            </script>
                            <a href="/projects/{{$project['slug']}}" class="btn btn-danger">Cancel</a>
                            <!-- <button type="button" class="btn btn-success">GoPay</button>
                            <button type="button" class="btn btn-info">OVO</button>
                            <button type="button" class="btn btn-warning">Dana</button> -->
                </div>
            </div>
    </div>
@endsection