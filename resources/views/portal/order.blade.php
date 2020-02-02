@extends('layouts.portal')

@section('content')
<div class="cart-table-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="checkout_details_area mt-50 clearfix">
                    <div class="cart-title">
                        <h2>Checkout</h2>
                    </div>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" id="company" placeholder="Full Name" value="">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" id="company" placeholder="Mobile" value="">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="email" class="form-control" id="email" placeholder="Email" value="">
                            </div>
                            <div class="col-12 mb-3">
                                <textarea name="comment" class="form-control w-100" id="comment" cols="30" rows="10" placeholder="Product Receive Address"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="cart-summary">
                    <h5>Cart Total</h5>
                    <ul class="summary-table">
                        <li><span>subtotal:</span> <span>4800.00 TK</span></li>
                        <li><span>delivery:</span> <span>Free</span></li>
                        <li><span>total:</span> <span>4800.00 TK</span></li>
                    </ul>

                    <div class="payment-method">
                        <!-- Cash on delivery -->
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="cod" checked>
                            <label class="custom-control-label" for="cod">Cash on Delivery</label>
                        </div>
                        <!-- Paypal -->
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="paypal">
                            <label class="custom-control-label" for="paypal">Agree With Terms & Conditions</label>
                        </div>
                    </div>
                    <div class="cart-btn mt-100">
                        <a href="#" class="btn amado-btn w-100">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection