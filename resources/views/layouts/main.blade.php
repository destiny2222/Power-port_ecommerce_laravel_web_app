<!doctype html>
<html lang="en">
    
<head>
        <!--Required Meta Tags-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="description">
        <!-- Title Of Site -->
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="/vendors/assets/images/favicon.png" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="/vendors/assets/css/plugins.css" />
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="/vendors/assets/css/style.css" />
        <link rel="stylesheet" href="/vendors/assets/css/responsive.css" />
        <link rel="stylesheet" href="{{ asset('vendors/assets/css/owl.carousel.min.css') }}" />
    </head>

    <body class="template-index template-product index-demo2 modal-popup-style contactus-page my-wishlist-page">
        <!-- Page Loader -->
        <div id="pre-loader"><img src="/vendors/assets/images/loader.gif" alt="Loading..." /></div>
        <!-- End Page Loader -->

        <!--Page Wrapper-->
        <div class="page-wrapper">
            <!-- header -->
                @include('layouts.header')
            <!-- header-end -->
            

            <!--Body Container-->
            <div id="page-content">
                @yield('content')

            </div>
            <!--End Body Container-->
        <!--Footer-->
        <div class="footer footer-2">
            <div class="footer-top clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 footer-about mb-4 mb-lg-0">
                            <img src="/logo-black.png" alt="" class="mb-3" width="100">
                            <p class="mb-1">Power Port Solutions: Innovating energy connectivity. Pioneering efficient solutions for a sustainable future. Empowering industries with cutting-edge technology.</p>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-2 footer-links">
                            <h4 class="h4">Informations</h4>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About us</a></li>
                                <li><a href="/faq">Faq</a></li>
                                <li><a href="/policy">Privacy policy</a></li>
                                {{-- <li><a href="/terms">Terms &amp; condition</a></li> --}}
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-2 footer-links">
                            <h4 class="h4">Quick Shop</h4>
                            <ul>
                                <li><a href="/product">Shop</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                                <li><a href="{{ route('sale_of_solar_panels') }}">Our Service</a></li>
                                <li><a href="/cart">Cart</a></li>
                                <li><a href="/blog">Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 footer-contact">
                            <h4 class="h4">Contact Us</h4>
                            <p class="address d-flex align-items-center"><i class="an an-map-marker-al"></i> 55 Gallaxy Enque, 2568 steet, 23568 NY</p>
                            <p class="phone d-flex align-items-center"><i class="an an-phone-l"></i>  <b class="me-1">Phone:</b> (440) 000 000 0000</p>
                            <p class="email d-flex align-items-center"><i class="an an-envelope-l"></i> <b class="me-1">Email:</b> info@example.com</p>
                            <ul class="list-inline social-icons mt-3">
                                <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="an an-facebook" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="an an-twitter" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinterest"><i class="an an-pinterest-p" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="an an-instagram" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="TikTok"><i class="an an-tiktok" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp"><i class="an an-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Footer-->

        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon an an-arw-up"></i></span> 
        <!--End Scoll Top-->


        <div class="modalOverly"></div>

        <!--Quickview Popup-->
        <div class="loadingBox"><div class="an-spin"><i class="icon an an-spinner4"></i></div></div>
        <div id="quickView-modal" class="mfp-with-anim mfp-hide">
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
                    <!--Model thumbnail -->
                    <div id="quickView" class="carousel slide">
                        <!-- Image Slide carousel items -->
                        <div class="carousel-inner">
                            <div class="item carousel-item active" data-bs-slide-number="0">
                                <img class="blur-up lazyload" data-src="/assets/images/products/product-5.jpg" src="/assets/images/products/product-5.jpg" alt="image" title="" />
                            </div>
                            <div class="item carousel-item" data-bs-slide-number="1">
                                <img class="blur-up lazyload" data-src="/assets/images/products/product-5-1.jpg" src="/assets/images/products/product-5-1.jpg" alt="image" title="" />
                            </div>
                            <div class="item carousel-item" data-bs-slide-number="2">
                                <img class="blur-up lazyload" data-src="/assets/images/products/product-5-2.jpg" src="/assets/images/products/product-5-2.jpg" alt="image" title="" />
                            </div>
                            <div class="item carousel-item" data-bs-slide-number="3">
                                <img class="blur-up lazyload" data-src="/assets/images/products/product-5-3.jpg" src="/assets/images/products/product-5-3.jpg" alt="image" title="" />
                            </div>
                            <div class="item carousel-item" data-bs-slide-number="4">
                                <img class="blur-up lazyload" data-src="/assets/images/products/product-5-4.jpg" src="/assets/images/products/product-5-4.jpg" alt="image" title="" />
                            </div>
                        </div>
                        <!-- End Image Slide carousel items -->
                        <!-- Thumbnail image -->
                        <div class="model-thumbnail-img">
                            <!-- Thumbnail slide -->
                            <div class="carousel-indicators list-inline">
                                <div class="list-inline-item active" id="carousel-selector-0" data-bs-slide-to="0" data-bs-target="#quickView">
                                    <img class="blur-up lazyload" data-src="/assets/images/products/product-5.jpg" src="/assets/images/products/product-5.jpg" alt="image" title="" />
                                </div>
                                <div class="list-inline-item" id="carousel-selector-1" data-bs-slide-to="1" data-bs-target="#quickView">
                                    <img class="blur-up lazyload" data-src="/assets/images/products/product-5-1.jpg" src="/assets/images/products/product-5-1.jpg" alt="image" title="" />
                                </div>
                                <div class="list-inline-item" id="carousel-selector-2" data-bs-slide-to="2" data-bs-target="#quickView">
                                    <img class="blur-up lazyload" data-src="/assets/images/products/product-5-2.jpg" src="/assets/images/products/product-5-2.jpg" alt="image" title="" />
                                </div>
                                <div class="list-inline-item" id="carousel-selector-3" data-bs-slide-to="3" data-bs-target="#quickView">
                                    <img class="blur-up lazyload" data-src="/assets/images/products/product-5-3.jpg" src="/assets/images/products/product-5-3.jpg" alt="image" title="" />
                                </div>
                                <div class="list-inline-item" id="carousel-selector-4" data-bs-slide-to="4" data-bs-target="#quickView">
                                    <img class="blur-up lazyload" data-src="/assets/images/products/product-5-4.jpg" src="/assets/images/products/product-5-4.jpg" alt="image" title="" />
                                </div>
                            </div>
                            <!-- End Thumbnail slide -->
                            <!-- Carousel arrow button -->
                            <a class="carousel-control-prev carousel-arrow" href="#quickView" data-bs-target="#quickView" data-bs-slide="prev"><i class="icon an-3x an an-angle-left"></i><span class="visually-hidden">Previous</span></a>
                            <a class="carousel-control-next carousel-arrow" href="#quickView" data-bs-target="#quickView" data-bs-slide="next"><i class="icon an-3x an an-angle-right"></i><span class="visually-hidden">Next</span></a>
                            <!-- End Carousel arrow button -->
                        </div>
                        <!-- End Thumbnail image -->
                    </div>
                    <!--End Model thumbnail -->
                    <div class="text-center mt-3"><a href="product-layout1.html">VIEW MORE DETAILS</a></div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <h2 class="product-title">Product Quick View Popup</h2>
                    <div class="product-review d-flex-center mb-2">
                        <div class="rating"><i class="icon an an-star"></i><i class="icon an an-star"></i><i class="icon an an-star"></i><i class="icon an an-star"></i><i class="icon an an-star-o"></i></div>
                        <div class="reviews ms-2"><a href="#">5 Reviews</a></div>
                    </div>
                    <div class="product-info">
                        <p class="product-vendor">Vendor:  <span class="fw-normal"><a href="#" class="fw-normal">Optimal</a></span></p>  
                        <p class="product-type">Product Type: <span class="fw-normal">Tops</span></p> 
                        <p class="product-sku">SKU:  <span class="fw-normal">50-ABC</span></p>
                    </div>
                    <div class="pro-stockLbl my-2">
                        <span class="d-flex-center stockLbl instock"><i class="icon an an-check-cil"></i><span> In stock</span></span>
                        <span class="d-flex-center stockLbl preorder d-none"><i class="icon an an-clock-r"></i><span> Pre-order Now</span></span>
                        <span class="d-flex-center stockLbl outstock d-none"><i class="icon an an-times-cil"></i> <span>Sold out</span></span>
                        <span class="d-flex-center stockLbl lowstock d-none" data-qty="15"><i class="icon an an-exclamation-cir"></i><span> Order now, Only  <span class="items">10</span>  left!</span></span>
                    </div>
                    <div class="pricebox">
                        <span class="price old-price">$400.00</span><span class="price product-price__sale">$300.00</span>
                    </div>
                    <div class="sort-description">Optimal Multipurpose Bootstrap 5 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion.. </div>
                    <form method="post" action="#" id="product_form--option" class="product-form">
                        <div class="product-options d-flex-wrap">
                            <div class="swatch clearfix swatch-0 option1">
                                <div class="product-form__item">
                                    <label class="label d-flex">Color:<span class="required d-none">*</span> <span class="slVariant ms-1 fw-bold">Black</span></label>
                                    <ul class="swatches-image swatches d-flex-wrap list-unstyled clearfix">
                                        <li data-value="Black" class="swatch-element color available active">
                                            <label class="rounded-0 swatchLbl small color black" title="Black"></label>
                                            <span class="tooltip-label top">Black</span>
                                        </li>
                                        <li data-value="Green" class="swatch-element color available">
                                            <label class="rounded-0 swatchLbl small color green" title="Green"></label>
                                            <span class="tooltip-label top">Green</span>
                                        </li>
                                        <li data-value="Orange" class="swatch-element color available">
                                            <label class="rounded-0 swatchLbl small color orange" title="Orange"></label>
                                            <span class="tooltip-label top">Orange</span>
                                        </li>
                                        <li data-value="Blue" class="swatch-element color available">
                                            <label class="rounded-0 swatchLbl small color blue" title="Blue"></label>
                                            <span class="tooltip-label top">Blue</span>
                                        </li>
                                        <li data-value="Red" class="swatch-element color available">
                                            <label class="rounded-0 swatchLbl small color red" title="Red"></label>
                                            <span class="tooltip-label top">Red</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swatch clearfix swatch-1 option2">
                                <div class="product-form__item">
                                    <label class="label">Size:<span class="required d-none">*</span> <span class="slVariant ms-1 fw-bold">XS</span></label>
                                    <ul class="swatches-size d-flex-center list-unstyled clearfix swatch-1 option2">
                                        <li data-value="XS" class="swatch-element xs available active">
                                            <label class="swatchLbl rounded-0 medium" title="XS">XS</label>
                                            <span class="tooltip-label">XS</span>
                                        </li>
                                        <li data-value="S" class="swatch-element s available">
                                            <label class="swatchLbl rounded-0 medium" title="S">S</label>
                                            <span class="tooltip-label">S</span>
                                        </li>
                                        <li data-value="M" class="swatch-element m available">
                                            <label class="swatchLbl rounded-0 medium" title="M">M</label>
                                            <span class="tooltip-label">M</span>
                                        </li>
                                        <li data-value="L" class="swatch-element l available">
                                            <label class="swatchLbl rounded-0 medium" title="L">L</label>
                                            <span class="tooltip-label">L</span>
                                        </li>
                                        <li data-value="XL" class="swatch-element xl available">
                                            <label class="swatchLbl rounded-0 medium" title="XL">XL</label>
                                            <span class="tooltip-label">XL</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-action d-flex-wrap w-100 mb-3 clearfix">
                                <div class="quantity">
                                    <div class="qtyField rounded">
                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>
                                        <input type="text" name="quantity" value="1" class="product-form__input qty rounded-0">
                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-l" aria-hidden="true"></i></a>
                                    </div>
                                </div>                                
                                <div class="add-to-cart ms-3 fl-1">
                                    <button type="button" class="btn button-cart rounded-0"><span>Add to cart</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="wishlist-btn d-flex-center">
                        <a class="add-wishlist d-flex-center text-uppercase me-3" href="my-wishlist.html" title="Add to Wishlist"><i class="icon an an-heart-l me-1"></i> <span>Add to Wishlist</span></a>
                        <a class="add-compare d-flex-center text-uppercase" href="compare-style1.html" title="Add to Compare"><i class="icon an an-random-r me-2"></i> <span>Add to Compare</span></a>
                    </div>
                    <!-- Social Sharing -->
                    <div class="social-sharing share-icon d-flex-center mx-0 mt-3">
                        <span class="sharing-lbl me-2">Share :</span>
                        <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i class="icon an an-facebook mx-1"></i><span class="share-title d-none">Facebook</span></a>
                        <a href="#" class="d-flex-center btn btn-link btn--share share-twitter" data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i class="icon an an-twitter mx-1"></i><span class="share-title d-none">Tweet</span></a>
                        <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest" data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest"><i class="icon an an-pinterest-p mx-1"></i> <span class="share-title d-none">Pin it</span></a>
                        <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Instagram"><i class="icon an an-instagram mx-1"></i><span class="share-title d-none">Instagram</span></a>
                        <a href="#" class="d-flex-center btn btn-link btn--share share-whatsapp" data-bs-toggle="tooltip" data-bs-placement="top" title="Share on WhatsApp"><i class="icon an an-whatsapp mx-1"></i><span class="share-title d-none">WhatsApp</span></a>
                        <a href="#" class="d-flex-center btn btn-link btn--share share-email" data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email"><i class="icon an an-envelope-l mx-1"></i><span class="share-title d-none">Email</span></a>
                    </div>
                    <!-- End Social Sharing -->
                </div>
            </div>
        </div>
        <!--End Quickview Popup-->

        <!--Addtocart Added Popup-->
        <div id="pro-addtocart-popup" class="mfp-with-anim mfp-hide">
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
            <div class="addtocart-inner text-center clearfix">
                <h4 class="title mb-3 text-success">Added to your shopping cart successfully.</h4>
                <div class="pro-img mb-3">
                    <img class="img-fluid blur-up lazyload" src="/assets/images/products/add-to-cart-popup.jpg" data-src="/assets/images/products/add-to-cart-popup.jpg" alt="Added to your shopping cart successfully." title="Added to your shopping cart successfully." />
                </div>
                <div class="pro-details">   
                    <h5 class="pro-name mb-0">Ditsy Floral Dress</h5>
                    <p class="sku my-2">Color: Gray</p>
                    <p class="mb-0 qty-total">1 X $113.88</p>
                    <div class="addcart-total bg-light mt-3 mb-3 p-2">
                        Total: <b class="price">$113.88</b>
                    </div>
                    <div class="button-action">
                        <a href="checkout-style1.html" class="btn btn-primary view-cart mx-1 rounded-0">Go To Checkout</a>
                        <a href="index.html" class="btn btn-secondary rounded-0">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Addtocart Added Popup-->

        <!--Newsletter Popup-->
        <div id="newsletter-modal" class="style2 mfp-with-anim mfp-hide">
            <div class="d-flex flex-row align-items-center">
                <div class="newsltr-img col-md-6 d-none d-sm-none d-md-block"><img src="/vendors/assets/images/newsletter-s2-img.jpg" alt="image"></div>
                <div class="newsltr-text col-md-6 text-center">
                    <div class="wraptext mw-100">
                        <h2 class="title mb-3">Hey Good Looking</h2>
                        <p class="mb-3">Here is your <b>10% DISCOUNT</b> to get something new.</p>
                        <form action="#" method="post" class="mcNewsletter mb-4">
                            <div class="input-group d-flex flex-wrap">
                                <input type="email" class="newsletter__input mb-3 rounded-0 w-100" name="EMAIL" value="" placeholder="Email address" required>
                                <button type="submit" class="btn mcNsBtn rounded-0 w-100" name="commit"><span>Subscribe</span></button>
                            </div>
                        </form>
                        <div class="customCheckbox justify-content-center checkboxlink clearfix">
                            <input id="dontshow" name="newsPopup" type="checkbox" />
                            <label for="dontshow" class=""><u>NO THANKS, LET ME SHOP</u></label>
                        </div>
                    </div>
                </div>
            </div>
            <button title="Close (Esc)" type="button" class="mfp-close text-black">×</button>
        </div>
        <!--End Newsletter Popup-->


        <!-- Including Jquery -->
        <script src="/vendors/assets/js/vendor/jquery-min.js"></script>
        <script src="{{ asset('vendors/assets/js/owl.carousel.min.js') }}"></script>
        <script src="/vendors/assets/js/vendor/js.cookie.js"></script>
        <!--Including Javascript-->
        <script src="/vendors/assets/js/plugins.js"></script>
        <script src="/vendors/assets/js/main.js"></script>
        <script src="/vendors/assets/js/vendor/photoswipe.min.js"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                autoplay:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:3
                    }
                }
            })
        </script>
        <!--Newsletter Popup Cookies-->
        {{-- <script>
            function newsletter_popup() {
                var cookieSignup = "cookieSignup", date = new Date();
                if ($.cookie(cookieSignup) != 'true' && window.location.href.indexOf("challenge#newsletter-modal") <= -1) {
                    setTimeout(function () {
                        $.magnificPopup.open({
                            items: {
                                src: '#newsletter-modal'
                            }
                            , type: 'inline', removalDelay: 300, mainClass: 'mfp-zoom-in'
                        }
                        );
                    }
                    , 5000);
                }
                $.magnificPopup.instance.close = function () {
                    if ($("#dontshow").prop("checked") == true) {
                        $.cookie(cookieSignup, 'true', {
                            expires: 1, path: '/'
                        }
                        );
                    }
                    $.magnificPopup.proto.close.call(this);
                };
            }
            newsletter_popup();
        </script> --}}
        <!--End Newsletter Popup Cookies-->
        
    </div>
    <!--End Page Wrapper-->
    @include('partials.message')
</body>
</html>