@extends('layouts.portal')

@section('content')
<div class="cart-table-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="cart-title mt-50">
                    <h2>Shopping Cart</h2>
                </div>
                <div class="cart-table clearfix">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cart_product_img">
                                    <a href="#"><img src="{{ asset('uploads/product/main/HC-001.png')}}" alt="Product"></a>
                                </td>
                                <td class="cart_product_desc">
                                    <h5>FLESHLIGHT FOR MEN</h5>
                                </td>
                                <td class="price">
                                    <span>4800 TK</span>
                                </td>
                                <td class="qty">
                                    <div class="qty-btn d-flex">
                                        <p>Qty</p>
                                        <div class="quantity">
                                            <span class="qty-minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                            <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                            <span class="qty-plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="short_overview">
                    <label class="label-info"><h5>Terms & Conditions</h5></label>
                    <p>
                        আমরা সারা বাংলাদেশে ফ্রী হোম ডেলিভারী দিয়ে থাকি।
                        আমাদের কোন ডেলিভারী চার্জ নেই।
                        ঢাকা শহরের ভেতরে ৩ ঘন্টার মধ্যে নিশ্চিত ডেলিভারী করা হয়।
                        পন্য অর্ডারে আমরা ২০০ টাকা আগ্রীম বিকাশ নিয়ে থাকি।
                        এই আগ্রীম ২০০ টাকা পন্যের মূল দাম থেকে কর্তন করা হবে।
                        ক্যাশ-অন ডেলিভারীর ক্ষেত্রে কোন মূল্য ফেরত দেবার সুযোগ নেই।
                        আমরাই দিতে পারি আপনাকে একমাএ অর্জিনিয়াল প্রোডার্ক্ট এর নিশ্চিয়তা।
                        পন্য অর্ডার করতে কল করুন : 01313597212
                        আমাদের বিকাশ পার্সোনাল নাম্বার : 01313597212
                        পণ্য ডেলিভারীর সময় সঠিক পণ্য দেখে-বুঝে নেওয়ার জন্য বিশেষভাবে অনুরোধ করা হচ্ছে।
                        নষ্ট বা ক্ষতিগ্রস্ত পণ্য গ্রহন না করে পণ্যবাহকের কাছে পণ্য ফেরত দেবার জন্য বলা হচ্ছে।
                        আপনাদের সুখী জীবনই আমাদের কাম্য।
                        টি.ভি.সি স্কাই শপ পরিবারের সাথে থাকার জন্য আপনাকে অসংখ্য ধন্যবাদ জানানো হচ্ছে।
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="cart-summary">
                    <h5>Cart Total</h5>
                    <ul class="summary-table">
                        <li><span>subtotal:</span> <span>4800 TK</span></li>
                        <li><span>delivery:</span> <span>Free</span></li>
                        <li><span>total:</span> <span>4800 TK</span></li>
                    </ul>
                    <div class="cart-btn mt-100">
                        <a href="{{route('order')}}" class="btn amado-btn w-100">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection