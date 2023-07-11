@extends ('partials.main')

<script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-Om4g1GPky-PGwInY"></script>

    

@section('container')
<h1 class="mt-5 text-center">Pembayaran Donasi untuk Proyek {{$project['project_name']}}</h1>
    <div class="container mb-4" style="max-width:800px;">
        
            <div class="card mt-4">
                <div class="card-body">
                    <h3 class="card-title">{{ $reward['reward_title'] }}</h3>
                    <p class="card-text mb-2 mt-3">{{ $reward['reward_desc'] }}</p>
                    <p class="card-text">Jumlah yang harus dibayarkan: <span class="p-1 bg-success r2 text-white">Rp.{{ $reward['reward_amount'] }}</span></p>
                    <!-- <h6 class="card-subtitle mb-2 text-muted">Informasi Pembayaran</h6>
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
                            </div> -->
                        </div>
                        <div class="form-group mt-4 ms-3">
                        <button id="pay-button" class="btn btn-primary w-20">Pay!</button>
                        <a href="/projects/{{$project['slug']}}" class="btn btn-danger w-20">Cancel</a>
                        </div>
                    
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
                            </script>                            <!-- <button type="button" class="btn btn-success">GoPay</button>
                            <button type="button" class="btn btn-info">OVO</button>
                            <button type="button" class="btn btn-warning">Dana</button> -->
                </div>
            </div>
    </div>
@endsection