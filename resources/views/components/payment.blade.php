<p class="secure">Secure checkout</p>
<div class="card-body">
    <div class="container" style="display: block !important;">

        <div class="card-info">
            <div class="radio">
                <input type="radio" id="visa" checked>
                <label for="visa">Credit / Debit Card</label>
            </div>
            <img src="/images/cards.png" alt="">
        </div>

        <div class="row">
            <div class="col-12">
                <div class="debit-card" email="{{(Auth::user()) != null ? Auth::user()->email : null}}" api-key-data = "{{env('STRIPE_KEY')}}" _token = "{{csrf_token()}}">
                    <div class="input-group input-group-sm mb-3">
                        <!-- <input type="email" class="form-control" id="email" placeholder="username@domain.com" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> -->
                        <input type="hidden" name="transaction_id" id ="transaction_id" value="">
                        <input type="hidden" name="receipt_url" id ="receipt_url" value="">
                        <input type="hidden" name="paymentType" value="Stripe">
                    </div>
                    <div class="card-parts">
                        <div class="left">
                            <p class="title">Credit/Debit Card Details:</p>
                            <div id="card-element">
                                <!-- Elements will create input elements here -->
                            </div>
                        </div>
                        <div class="right">
                            <p class="title">Total Amount:</p>
                            <p class="total"></span> </p>
                        </div>
                    </div>

                    <div id="card-errors" style="color:#000;" role="alert">
                        <!-- We'll put the error messages in this element -->
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="loader"></div>
            </div>
        </div>
    </div>
</div>
