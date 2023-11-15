@extends('layouts.main')
@section('content')
     <!--Home slider-->
     <section class="slideshow slideshow-wrapper">
        <div class="home-slideshow">
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload desktop-hide" data-src="/vendors/assets/images/slideshow/demo2-banner1.jpg" src="/vendors/assets/images/slideshow/demo2-banner1.jpg" alt="HIGH CONVERTING" title="HIGH CONVERTING" />
                    <img class="blur-up lazyload mobile-hide" data-src="/vendors/assets/images/slideshow/demo2-banner1-m.jpg" src="/vendors/assets/images/slideshow/demo2-banner1-m.jpg" alt="HIGH CONVERTING" title="HIGH CONVERTING" />
                    <div class="container">
                        <div class="slideshow-content slideshow-overlay middle d-flex justify-content-center align-items-center">
                            <div class="slideshow-content-in text-center">
                                {{-- <div class="wrap-caption animation style1 px-2">
                                    <h1 class="h1 mega-title ss-mega-title fs-1 text-capitalize">Ensuring<br>Customer Success</h1>
                                    <span class="mega-subtitle fs-6 ss-sub-title d-md-block d-lg-block d-none">Creative, Flexible and High Performance Html Template!</span>
                                    <div class="ss-btnWrap mt-3 mt-md-0">
                                        <a class="btn btn-lg border-0 btn-primary" href="shop-top-filter.html">Shop Women</a>
                                        <a class="btn btn-lg border-0 btn-primary" href="shop-top-filter.html">Shop Men</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload desktop-hide" data-src="/vendors/assets/images/slideshow/demo2-banner2.jpg" src="/vendors/assets/images/slideshow/demo2-banner2.jpg" alt="" title="" />
                    <img class="blur-up lazyload mobile-hide" data-src="/vendors/assets/images/slideshow/demo2-banner2-m.jpg" src="/vendors/assets/images/slideshow/demo2-banner2-m.jpg" alt="" title="" />
                    <div class="slideshow-content slideshow-overlay bottom-middle container d-flex justify-content-center align-items-center">
                        <div class="slideshow-content-in text-center">
                            <div class="wrap-caption animation style1 whiteText px-2">
                                {{-- <p class="ss-small-title mb-2 text-uppercase">We are Beyond Imagination</p>
                                <h2 class="mega-title ss-mega-title fs-1 text-capitalize">Infinite Possibilities</h2>
                                <span class="mega-subtitle ss-sub-title fs-6 d-md-block d-lg-block d-none">Increase your exposure, customers & sales.</span>
                                <div class="ss-btnWrap mt-3 mt-md-0">
                                    <a class="btn btn-lg border-0 btn-primary" href="shop-top-filter.html">View Collection</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Home slider-->


    <section class="section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="content-section text-center col-lg-9 m-auto">
                        <h1 class="mb-4">TIRED OF UNRELIABLE ELECTRICITY?</h1>
                        <p class="fs-6">
                            On-Energy Solar Generators are  a reliable and clean source of electrical energy, which  produces <b>AC 220v 50hz output, 5v usb  and 12v DC Power</b> to keep all your devices powered. With our solar generators, your smartphones, tablets, laptops, fan, mini coolers, blenders, printers, bulbs and other devices will never run out of power.
                            No stress, no worries. Do what you want when you want to. Free your self from power outages. Live a free life with our On-Energy solar generators
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!--Store Feature-->
     <section class="store-features style1 py-5">
        <div class="container">
            <div class="row">
                <div class="section-header col-12">
                    <h2>Why shop with us?</h2>
                </div>
            </div>
            <div class="row store-info">
                <div class="col mb-3 my-sm-3 text-center">
                    <i class="an an-shield rounded-circle mb-4"></i>
                    <h5 class="body-font">Products Quality</h5>
                    <p class="sub-text">Comprehensive quality control and affordable prices</p>
                </div>
                <div class="col mb-3 my-sm-3 text-center">
                    <i class="an an-ship-fast rounded-circle mb-4"></i>
                    <h5 class="body-font">Fast Shipping</h5>
                    <p class="sub-text">Fast and convenient door to door delivery</p>
                </div>
                <div class="col mb-3 my-sm-3 text-center">
                    <i class="an an-award rounded-circle mb-4"></i>
                    <h5 class="body-font">Payment Security</h5>
                    <p class="sub-text">More than  different secure payment methods</p>
                </div>
                <div class="col mb-3 my-sm-3 text-center">
                    <i class="an an-chat rounded-circle mb-4"></i>
                    <h5 class="body-font">Dedicated Support</h5>
                    <p class="sub-text">24/7 Customer Service - We’re here & happy to help!</p>
                </div>
            </div>
        </div>
    </section>
    <!--End Store Feature-->

    <!--Best Seller With Tabs-->
    <section class="section product-slider tab-slider-product">
        <div class="container">
            <div class="section-header">
                <h2>On-Energy Solar Generator Series</h2>
                {{-- <p>Browse the huge variety of our best seller</p> --}}
            </div>
            <div class="tabs-listing">
                <div class="tab_container">
                    <div id="tab1" class="tab_content">
                        <div class="grid-products">
                            <div class="row">
                                @foreach ($product as $products)
                                    @if ($products->category->id == '1')
                                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="{{ route('details-page',$products->slug) }}" class="product-img">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="{{ asset('upload/product/'.$products->image) }}" src="{{ asset('upload/product/'.$products->image) }}" alt="image" title="">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="{{ asset('upload/product/'.$products->image) }}" src="{{ asset('upload/product/'.$products->image) }}" alt="image" title="">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->
                                            </div>
                                            <!-- end product image -->
                                            <!--start product details -->
                                            <div class="product-details text-left">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="{{ route('details-page',$products->slug) }}">{{  $products->name }}</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">${{  $products->price }}</span>
                                                </div>
                                                <!-- End product price -->
                                                <!--Product Review-->
                                                <div class="product-review">
                                                    <p>{!!  html_entity_decode(\Str::limit($products->description,60))  !!}</p>
        
                                                    <div class="">
                                                        <a href="{{ route('details-page',$products->slug) }}" class="btn btn-primary">Buy Now</a>
                                                    </div>
                                                </div>
                                                <!--End Product Review-->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="view-collection text-center mt-3 mt-md-4">
                            <a href="/product" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!--End Best Seller With Tabs-->

   

   

    <!--Parallax Banner-->
    <div class="section parallax-banner-style1 pt-0">
        <div class="section-header ">
            <h1>Introducing On-Energy series of Portable Power Stations</h1>
        </div>
        <div class="hero hero--large hero__overlay bg-size bgFixed background-parallax">
            <img class="bg-img" src="/vendors/assets/images/parallax/demo2-pl-banner.jpg"  alt="image">
            <div class="hero__inner">
                <div class="video-popup-content position-relative">
                    <a class="mfpbox mfp-with-anim popup-video d-flex align-items-center justify-content-center" href="https://www.youtube.com/watch?v=FUz4B4eYa90?controls=0&amp;autoplay=1&amp;rel=0&amp;showinfo=0" title="View Video">
                        {{-- <img class="w-100 d-block blur-up lazyloaded" data-src="assets/images/video-popup-bg.jpg" src="assets/images/video-popup-bg.jpg" alt="image" title=""> --}}
                        <i class="an an-play-cir" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--End Parallax Banner-->

      <!--Top Picks On Fashion Product Slider-->
      {{-- <section class="section product-slider">
        <div class="container">
            <div class="row">
                <div class="section-header col-12">
                    <h2> Inverter solar Systems</h2>
                </div>
            </div>
            <div class="productSlider grid-products">
                @foreach ($product as $products)
                    @if ($products->category->id == '2')
                    <div class="item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/products/product-14.jpg" src="assets/images/products/product-14.jpg" alt="image" title="">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/products/product-14-1.jpg" src="assets/images/products/product-14-1.jpg" alt="image" title="">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
    
                            <!--Product Button-->
                            <div class="button-set style2">
                                <ul>
                                    <li>
                                        <!--Cart Button-->
                                        <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                            <i class="icon an an-cart-l"></i> <span class="tooltip-label">Add to Cart</span>
                                        </a>
                                        <!--end Cart Button-->
                                    </li>
                                    <li>
                                        <!--Quick View Button-->
                                        <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon an an-search-l"></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                        <!--End Quick View Button-->
                                    </li>
                                    <li>
                                        <!--Wishlist Button-->
                                        <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                            <i class="icon an an-heart-l"></i>
                                            <span class="tooltip-label">Add To Wishlist</span>
                                        </a>
                                        <!--End Wishlist Button-->
                                    </li>
                                    <li>
                                        <!--Compare Button-->
                                        <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                            <i class="icon an an-sync-ar"></i>
                                            <span class="tooltip-label">Add to Compare</span>
                                        </a>
                                        <!--End Compare Button-->
                                    </li>
                                </ul>
                            </div>
                            <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Martha Knit Top</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="old-price">$199.00</span>
                                <span class="price">$219.00</span>
                            </div>
                            <!-- End product price -->
                            <!--Product Review-->
                            <div class="product-review"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>
                            <!--End Product Review-->
                            <!--Color Variant -->
                            <ul class="swatches">
                                <li class="swatch small green"><span class="tooltip-label">Green</span></li>
                                <li class="swatch small orange"><span class="tooltip-label">Orange</span></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section> --}}
    <!--End Top Picks On Fashion Product Slider-->
@endsection
               

              
            

           