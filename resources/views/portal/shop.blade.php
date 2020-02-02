@extends('layouts.portal')

@section('content')
<div class="shop_sidebar_area">

</div>

<div class="amado_product_area">
    <div class="container-fluid">
        <div class="row">
            <!-- Single Product Area -->
            <?php foreach ($products as $key => $value) { ?>
                <div class="col-12 col-sm-4 col-md-12 col-xl-4">
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{ asset('uploads/product/main/'.$value->ImageUrl)}}" alt="No Image">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="{{ asset('uploads/product/sub/'.$value->SubImageUrl)}}" alt="No Image">
                        </div>
                        <!-- Product Description -->
                        <div class="product-description d-flex align-items-center justify-content-between">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price">{{ $value->Price}} TK</p>
                                <a href="{{ route('details') }}">
                                    <h6>{{ $value->Name}}</h6>
                                </a>
                            </div>
                            <!-- Ratings & Cart -->
                            <div class="ratings-cart text-right">
                                <div class="ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="cart">
                                    <a href="{{ route('details') }}" data-toggle="tooltip" data-placement="left" title="For Order">
                                        <button class="btn btn-success"><i class="fa fa-shopping-cart"> Details</i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
@endsection