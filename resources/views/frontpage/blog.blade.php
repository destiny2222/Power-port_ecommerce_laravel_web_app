@extends('layouts.main')
@section('content')

<!--Collection Banner-->
<div class="collection-header">
    <div class="collection-hero">
        <div class="collection-hero__image"></div>
        <div class="collection-hero__title-wrapper container">
            <h1 class="collection-hero__title">Blog</h1>
            <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="/" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">Blog</span></div>
        </div>
    </div>
</div>
<!--End Collection Banner-->


<div class="container section">
    <div class="row about-info1">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 mx-auto text-center mb-4" style="padding: 30px">
            <h1 class="mb-3 fw-normal fs-26 text-capitalize">What is a Portable Solar Generator?</h1> 
            <p>
                A Portable solar generator is a rechargeable battery-powered generator. Equipped with AC outlet, DC ports, and USB charging ports, they can keep all your devices charged, from smartphones, tablets, laptops, fan, mini coolers, blenders, printers, lights and so much more.                     access to power supply, letting you live a worry-free life. We keep your devices always ON!!!    
            </p>                     
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 mx-auto text-center mb-4" style="padding: 30px">
            <h1 class="mb-3 fw-normal fs-26 text-capitalize">How does a Portable Solar Generator work?</h1> 
            <p>
                On Energy solar generators have a DC to AC inverter that increases the DC voltage, and then changes it to alternating current before sending it out to power a device, like your laptop and TV. The DC input port collects and store the electricity/energy from an AC outlet or a solar panel and output through built-in USB ports and the AC outlet.  
            </p>                     
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 mx-auto text-center mb-4" style="padding: 30px">
            <h1 class="mb-3 fw-normal fs-26 text-capitalize"> Benefits of a Portable Power Station </h1>
            <div class="row">
                <div class="col-lg-12 " style="padding: 30px">
                    <h5>Clean & Quiet</h5>
                    <p>
                        Renewable Energy is gotten from the sun to charge the battery. No gasoline, toxic fumes, or noise during operation.            
                    </p>
                </div>
                <div class="col-lg-12 " style="padding: 30px">
                    <h5>Portable</h5>
                    <p>
                        With a compact, lightweight design, it’s easy to carry around wherever you go.           
                    </p>
                </div>
                <div class="col-lg-12  " style="padding: 30px">
                    <h5>Safe</h5>
                    <p>
                        With many layers of electrical protection, it is safe to use outdoors and indoors.            
                    </p>
                </div>
                <div class="col-lg-12  " style="padding: 30px">
                    <h5>Zero Cost</h5>
                    <p>
                        With free energy from the sun and no maintenance, the cost of running is ZERO            
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

    <!--Best Seller With Tabs-->
    <section class="section product-slider tab-slider-product">
        <div class="container">
            <div class="section-header" style="padding-bottom: 5%">
                <h2>On-Energy Solar Generator Series</h2>
                {{-- <p>Browse the huge variety of our best seller</p> --}}
            </div>
            <div class="tabs-listing">
                <div class="tab_container">
                    <div id="tab1" class="tab_content">
                        <div class="grid-products">
                            <div class="row">
                                @foreach ($product as $products)
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
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

@endsection