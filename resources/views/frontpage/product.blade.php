@extends('layouts.main')
@section('content')
    <!--Collection Banner-->
    <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image"></div>
            <div class="collection-hero__title-wrapper container">
                <h1 class="collection-hero__title">Shop </h1>
                <div class="breadcrumbs text-uppercase mt-1 mt-lg-2">
                    <a href="/" title="Back to the home page">Home</a>
                    <span>|</span><span class="fw-bold">Shop </span>
                </div>
            </div>
        </div>
    </div>
    <!--End Collection Banner-->

    <div class="container-fluid">
        <div class="row">

            <!--Main Content-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">

                <!--Product Grid-->
                <div class="grid-products grid--view-items shop-grid-5 prd-grid">
                    <div class="row">
                        @foreach ($product as $products)
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
                                <a href="{{ route('details-page',$products->slug) }}" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{  asset('upload/product/'.$products->image) }}" src="{{  asset('upload/product/'.$products->image) }}" alt="image" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{  asset('upload/product/'.$products->image) }}" src="{{  asset('upload/product/'.$products->image) }} alt="image" title="">
                                    <!-- End hover image -->
                                </a>
                                <!--End Product Image-->
                            </div>
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name text-uppercase">
                                    <a href="{{ route('details-page',$products->slug) }}">{{  $products->name }}</a>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="price">${{ $products->price }}</span>
                                </div>
                                <!--End Product Price-->
                                <!--Sort Description-->
                                <p class=" sort-desc">
                                    {!!  html_entity_decode(\Str::limit($products->description,60))  !!}
                                </p>
                                <!--End Sort Description-->
                                
                                <!-- Product Button -->
                                <div class="button d-flex">
                                    <div class="addtocart-btn">
                                        <a class="btn " href="{{ route('details-page',$products->slug) }}">
                                            <i class="icon hidden an an-cart-l"></i>
                                            Buy Now
                                        </a>
                                    </div>
                                </div>
                                <!-- End Product Button -->
                            </div>
                            <!--End Product Details-->
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                <!--End Product Grid-->

                <!--Pagination Classic-->
                
                <div class="pagination pt-5 pb-5">
                    <ul>
                        {{  $product->links() }}
                    </ul>
                </div>
                <!--End Pagination Classic-->
            </div>
            <!--End Main Content-->
        </div>
    </div>
@endsection