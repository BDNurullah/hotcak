@extends('layouts.portal')

@section('content')
<!-- Product Details Area Start -->
<div class="single-product-area section-padding-100">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="single_product_thumb">
                    <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url({{ asset('uploads/product/main/HC-001.png')}});">
                            </li>
                            <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url({{ asset('uploads/product/sub/HC-001_1.jpeg')}});">
                            </li>
                            <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url({{ asset('uploads/product/sub/HC-001_2.jpeg')}});">
                            </li>
                            <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url({{ asset('uploads/product/sub/HC-001_3.jpeg')}});">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="gallery_img" href="{{ asset('uploads/product/main/HC-001.png')}}">
                                    <img class="d-block w-100" src="{{ asset('uploads/product/main/HC-001.png')}}" alt="First slide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="gallery_img" href="{{ asset('uploads/product/sub/HC-001_1.jpeg')}}">
                                    <img class="d-block w-100" src="{{ asset('uploads/product/sub/HC-001_1.jpeg')}}" alt="Second slide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="gallery_img" href="{{ asset('uploads/product/sub/HC-001_2.jpeg')}}">
                                    <img class="d-block w-100" src="{{ asset('uploads/product/sub/HC-001_2.jpeg')}}" alt="Third slide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="gallery_img" href="{{ asset('uploads/product/sub/HC-001_3.jpeg')}}">
                                    <img class="d-block w-100" src="{{ asset('uploads/product/sub/HC-001_3.jpeg')}}" alt="Fourth slide">
                                </a>
                            </div>
                        </div>
                    </div>
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
            <div class="col-12 col-lg-5">
                <div class="single_product_desc">
                    <!-- Product Meta Data -->
                    <div class="product-meta-data">
                        <div class="line"></div>
                        <p class="product-price">4800 TK</p>
                        <a href="#">
                            <h6>FLESHLIGHT FOR MEN</h6>
                        </a>
                        <!-- Ratings & Review -->
                        <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                            <div class="review">
                                <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                            </div>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <!-- Avaiable -->
                    </div>

                    <div class="short_overview my-5">
                        <h6>Product Description</h6>
                        <p>Flesh Light Now in Bangladesh FOR YOUR BED ENJOY . 12 FUNCTION WITH SEX  YOUR ENJOY NOW ON YOUR HAND REMOTE .
                            <br/>  Only Original Products Brought To You By HOTCAK.COM
                            <br/>  Hot Sales Real Skin Feeling Pussy male masturbator artificial pussy vibrator for man
                            <br/>  Name: masturbator cup
                            <br/>  Material: 100% silicon
                            <br/>  Size: 300*120mm Weight: 750g
                            <br/>  Color: flesh Type: male masturbator
                            <br/>  Waterproof: Yes
                            <br/>  Vibration: Yes Certification: SGS USA
                            <br/>  Notes: Wash before and after use
                            <br/>  Material: All the raw material is according the rule of International Healthy Standard.
                            <br/>  Function: Improve the sexual goal via the  function of Massage and vibrate the sensitive part
                            <br/>  Packing: gift box
                            <br/>  Quality control: From raw materials to finished products, every process is tested and controlled,professionally and seriously by our
                            <br/>  professional machines and person.
                        </p>
                    </div>
                    <!-- Add to Cart Form -->
                        <button><a class="btn amado-btn" href="{{route('cart')}}">Add to cart</a></button>
<!--                    <form class="cart clearfix" method="post">
                        <button type="submit" name="addtocart" value="5" class="btn amado-btn">Add to cart</button>
                    </form>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Details Area End -->
@endsection