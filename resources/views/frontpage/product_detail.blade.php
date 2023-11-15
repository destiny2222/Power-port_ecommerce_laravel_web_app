@extends('layouts.main')
@section('content')

<!--Breadcrumbs-->
<div class="breadcrumbs-wrapper text-uppercase">
    <div class="container">
        <div class="breadcrumbs"><a href="/" title="Back to the home page">Home</a><span>|</span><span
                class="fw-bold">Product Details</span></div>
    </div>
</div>
<!--End Breadcrumbs-->

<!--Main Content-->
<div class="container">
    <!--Product Content-->
    <div class="product-single">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="product-details-img product-horizontal-style clearfix mb-3 mb-md-0">
                    <div class="zoompro-wrap product-zoom-right w-100 p-0">
                        <div class="zoompro-span"><img id="zoompro" class="zoompro"
                                src="{{ asset('upload/product/'.$product->image) }}"
                                data-zoom-image="{{ asset('upload/product/'.$product->image) }}" alt="product" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <!-- Product Info -->
                <div class="product-single__meta">
                    <div class="title-nav d-flex justify-content-between">
                        <h1 class="product-single__title pe-5">{{ $product->name }}</h1>
                    </div>
                    <!-- End Product Reviews -->
                    <!-- Product Info -->
                    <div class="product-info">
                        {{-- <p class="product-type">Product Type: <span>Floral Top</span></p> --}}
                        <p class="product-sku">SKU: <span class="variant-sku">{{  $product->SKU }}</span></p>
                        <p class="product-cat">Category: <span><a href="#">{{  $product->category->name }}</a>
                    </div>
                    <!-- End Product Info -->
                    <!-- Product Price -->
                    <div class="product-single__price pb-0 mb-0">
                        <span class="visually-hidden">Regular price</span>
                        <span class="product-price__sale--single">
                            <span class="product-price__price product-price__sale-d">₦{{  number_format($product->price, 2) }}</span>
                           
                        </span>

                    </div>
                    <!-- End Product Price -->
                </div>
                <!-- End Product Info -->
                <div class="product-single__description rte">
                    <p class="mb-2">
                        {!!  html_entity_decode(\Str::limit($product->description,100))  !!}
                    </p>
                </div>
                <!-- Product Form -->
                <form method="post" action="{{ route('cart.add', $product->slug) }}" class="product-form form-bordered hidedropdown">
                    @csrf
                    <input type="text" hidden  name="product_id" value="{{ $product->id }}">
                    <!-- Product Action -->
                    <div class="product-action w-100 clearfix">
                        <div class="product-form__item--quantity d-flex-center mb-3">
                            <div class="qtyField">
                                <a class="qtyBtn minus" href="javascript:void(0);">
                                    <i class="icon an an-minus-r" aria-hidden="true"></i>
                                </a>
                                <input type="text" name="quantity" value="1" class="product-form__input qty rounded-0">
                                <a class="qtyBtn plus" href="javascript:void(0);">
                                    <i class="icon an an-plus-r" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="pro-stockLbl ms-3">
                                <span class="d-flex-center stockLbl instock">
                                    <span> Quantity</span>
                                </span>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="product-form__item--buyit clearfix">
                                    <button type="submit" class="btn rounded-0 btn-outline-primary">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Action -->
                </form>
            </div>
        </div>
    </div>
    <!--Product Content-->

    <!--Product Tabs-->
    <div class="tabs-listing style3 mt-0 mt-md-5">
        <ul class="product-tabs style3 list-unstyled d-flex-wrap border-bottom justify-content-center m-0 d-none d-md-flex">
            <li rel="description" class="active"><a class="tablink">Description</a></li>
            <li rel="addtional-tabs"><a class="tablink">Addtional Information</a></li>
        </ul>
        <div class="tab-container">
            <h3 class="tabs-ac-style d-md-none active" rel="description">Description</h3>
            <div id="description" class="tab-content">
                <div class="product-description">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4 mb-md-0">
                            <div>
                                {!!  html_entity_decode($product->description)  !!}
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="tabs-ac-style d-md-none" rel="addtional-tabs">Addtional Tabs</h3>
            <div id="addtional-tabs" class="tab-content">
                <div>
                    {!!  html_entity_decode($product->additional_information)  !!}
                </div>
            </div>
        </div>
    </div>
    <!--End Product Tabs-->
</div>
<!--End Container-->



<!--Recently Viewed Products-->
<section class="section product-slider pb-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="section-header col-12">
                <h2 class="text-transform-none">Recently Viewed Products</h2>
            </div>
        </div>
        <div class="productSlider grid-products">
            <div class="item">
                <!--Start Product Image-->
                <div class="product-image">
                    <!--Start Product Image-->
                    <a href="product-layout1.html" class="product-img">
                        <!-- image -->
                        <img class="primary blur-up lazyload" data-src="assets/images/products/product-11.jpg"
                            src="assets/images/products/product-11.jpg" alt="image" title="">
                        <!-- End image -->
                        <!-- Hover image -->
                        <img class="hover blur-up lazyload" data-src="assets/images/products/product-11-1.jpg"
                            src="assets/images/products/product-11-1.jpg" alt="image" title="">
                        <!-- End hover image -->
                    </a>
                    <!--End Product Image-->

                    <!--Product Button-->
                    <div class="button-set style0 d-none d-md-block">
                        <ul>
                            <!--Cart Button-->
                            <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i
                                        class="icon an an-cart-l"></i> <span class="tooltip-label top">Add to
                                        Cart</span></a></li>
                            <!--End Cart Button-->
                            <!--Quick View Button-->
                            <li><a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)"
                                    data-toggle="modal" data-target="#content_quickview"><i
                                        class="icon an an-search-l"></i> <span class="tooltip-label top">Quick
                                        View</span></a></li>
                            <!--End Quick View Button-->
                            <!--Wishlist Button-->
                            <li><a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                        class="icon an an-heart-l"></i> <span class="tooltip-label top">Add To
                                        Wishlist</span></a></li>
                            <!--End Wishlist Button-->
                            <!--Compare Button-->
                            <li><a class="btn-icon compare add-to-compare" href="compare-style2.html"><i
                                        class="icon an an-sync-ar"></i> <span class="tooltip-label top">Add to
                                        Compare</span></a></li>
                            <!--End Compare Button-->
                        </ul>
                    </div>
                    <!--End Product Button-->
                </div>
                <!--End Product Image-->
                <!--Start Product Details-->
                <div class="product-details text-center">
                    <!--Product Name-->
                    <div class="product-name">
                        <a href="product-layout1.html">Puffer Jacket</a>
                    </div>
                    <!--End Product Name-->
                    <!--Product Price-->
                    <div class="product-price">
                        <span class="price">$89.00</span>
                    </div>
                    <!--End Product Price-->
                    <!--Product Review-->
                    <div class="product-review d-flex align-items-center justify-content-center">
                        <i class="an an-star"></i><i class="an an-star"></i><i class="an an-star"></i><i
                            class="an an-star"></i><i class="an an-star-o"></i>
                        <span class="caption hidden ms-2">6 reviews</span>
                    </div>
                    <!--End Product Review-->
                    <!--Color Variant -->
                    <ul class="image-swatches swatches">
                        <li class="radius blue medium"><span class="swacth-btn"></span><span
                                class="tooltip-label">Blue</span></li>
                        <li class="radius pink medium"><span class="swacth-btn"></span><span
                                class="tooltip-label">Pink</span></li>
                        <li class="radius red medium"><span class="swacth-btn"></span><span
                                class="tooltip-label">Red</span></li>
                    </ul>
                    <!--End Color Variant-->
                </div>
                <!--End Product Details-->
            </div>

        </div>
    </div>
</section>
<!--End Recently Viewed Products-->


@endsection