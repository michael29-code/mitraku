@extends('layouts/layout')

@section('content')
    <div class="row-lg-10 d-flex justify-content-center">
        <div class="col-md-6 payment-form my-5">
            <h1 class="h2 mb-4">Confirm Payment</h1>
            <form action="">
                <div class="row" style="">
                    <div class="col-md-12 full-name mb-3">
                        <label for="full-name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="Name" name='nomorInduk' id="nomorInduk" value="{{ Session::get('nomorInduk') }}">
                    </div>
                    
                    <div class="col-md-6 country mb-4">
                        <label for="country" class="form-label">Country</label>
                        <select id="country" class="form-control" name="country" >
                            <option value="">United Kingdom</option>
                        </select>
                    </div>

                    <div class="col-md-6 postalCode mb-4">
                        <label for="postalCode" class="form-label">Postal Code</label>
                        <input type="text" class="form-control" name="postalCode" id="postalCode" value="{{ Session::get('postalCode') }}">
                    </div>
    
                    <div class="col-md-12 card cardPayment border-primary">
                        <div class="col-md-12 cardNumber mb-3 my-3">
                                <label for="cardNumber" class="form-label" >Card Number</label>
                                <input type="text" id="cardNumber" name="cardNumber" class="form-control" value="{{ Session::get('cardNumber') }}">
                        </div>
                        <div class="col-md-12 row mb-3">
                            <div class="col-md-6">
                                <label for="expiry" class="form-label" >Expiry</label>
                                <input type="text" id="expiry" name="expiry" class="form-control" value="{{ Session::get('expiry') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="cvc" class="form-label" >CVC</label>
                                <input type="text" id="cvc" name="cvc" class="form-control" value="{{ Session::get('cvc') }}">
                            </div>
                        </div>
    
                    </div>
    
                    <p class="my-3">
                        Your subscription starts today. You will be charged $399 USD (plus applicable taxes) today and annually thereafter until you cancel. You can cancel at any time in your account settings to avoid future charges.  
                    </p>
                                          
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100">Pay Now</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-4 explanation ms-4 my-5">
            <div class="ms-3 row subscription-advantages row shadow bg-body-tertiary rounded mb-4">
                <h1 class="h4 my-3">MiKu Advertise Subscription</h1>
                <ul class="ms-4">
                    <li class="body-large-medium">Wide Customer Reach</li>
                    <li class="body-large-medium">Wide Customer Reach</li>
                    <li class="body-large-medium">Wide Customer Reach</li>
                    <li class="body-large-medium">Wide Customer Reach</li>
                </ul>
            </div>
            
            <div class="my-3 ms-3 row subscription-advantages row shadow bg-body-tertiary rounded">
                <h1 class="h4 mb-4 my-3"><b>No commitment. Cancel anytime.</b></h1>
                <div class="col mb-4">
                    <div class="row">
                        <h1 class="col-lg-10 body-medium-medium">Monthly subscription</h1>
                        <h1 class="col body-medium-bold">30-Days</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <b class="h5 col-lg-6">Today's Total :  </b>
                        <b class="col body-large-bold ">IDR {{ Session::get('paymentPrice') }}</b>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection