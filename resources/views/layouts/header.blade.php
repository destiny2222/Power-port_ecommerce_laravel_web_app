<div class="top-info-bar">
    <div class="container">
        <div class="row topBar-slider">
            <div class="item d-flex flex-row justify-content-lg-start justify-content-center justify-content-md-center justify-content-sm-center col-12 col-sm-6 col-md-4 col-lg-4 text-uppercase">
                <a href="#"> Monday to Saturday 8:00am to 6:00pm</a>
            </div>
            <div class="item d-flex flex-row justify-content-center justify-content-md-center justify-content-sm-center col-12 col-sm-6 col-md-4 col-lg-4 text-uppercase center">
                <a href="#"> info@domain.com</a>
            </div>
            <div class="item d-flex flex-row justify-content-lg-end justify-content-center justify-content-md-center justify-content-sm-center col-12 col-sm-6 col-md-4 col-lg-4 text-uppercase">
                <a href="#">(440) 000 000 0000</a>
            </div>
        </div>
    </div>
</div>
<header id="header" class="header header-main d-flex align-items-center header-2">
    <div class="container">        
        <div class="row">
            <!--Logo / Menu Toggle-->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 align-self-center justify-content-start d-flex">
                <!--Mobile Toggle-->
                <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open me-3 d-lg-none">
                    <i class="icon an an-times-l"></i><i class="icon an an-bars-l"></i>
                </button>
                <!--End Mobile Toggle-->
                <!--Logo-->
                <div class="logo">
                    <a href="/">
                     <img class="logo-img mh-100" src="/logo.png" alt="" title="" width="140" height="120" />
                     {{-- <span class="logo-txt d-none">Optimal</span> --}}
                    </a>
                </div>
                <!--End Logo-->
            </div>
            <!--End Logo / Menu Toggle-->
            <!--Main Navigation Desktop-->
            <div class="col-1 col-sm-1 col-md-1 col-lg-6 align-self-center d-menu-col">
                <!--Desktop Menu-->
                <div class="row">
                    <div class="col-1 col-sm-12 col-md-12 col-lg-12 align-self-end d-menu-col">
                        <!--Desktop Menu-->
                        <nav class="grid__item" id="AccessibleNav">
                            <ul id="siteNav" class="site-nav medium center hidearrow">
                                <li class="lvl1 parent megamenu"><a href="/">Home </a></li>
                            <li class="lvl1 parent megamenu"><a href="/product">Shop</a></li>
                            <li class="lvl1 parent megamenu"><a href="/faq">FAQ </a></li>
                            <li class="lvl1 parent megamenu"><a href="/about">About Us </a></li>
                            <li class="lvl1 parent dropdown"><a href="javascript:void()">What We Do <i class="an an-angle-down-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('sale_of_solar_panels') }}" class="site-nav">Sale of Inverter Solution & Solar Panels</a></li>
                                    <li><a href="/our-services/meeting-room-projector" class="site-nav">Solar Panels & Inverter Installations</a></li>
                                    <li><a href="/our-services/after-sales-services" class="site-nav">After-Sales Services</a></li>
                                </ul>
                            </li>
                            <li class="lvl1 parent megamenu"><a href="/cart"> Cart </a></li>
                            <li class="lvl1 parent dropdown"><a href="javascript:void()">Blog <i class="an an-angle-down-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="/blog" class="site-nav">Why you need a Power station</a></li>
                                </ul>
                            </li>
                            </ul>
                        </nav>
                        <!--End Desktop Menu-->
                    </div>
                </div>                
                <!--End Desktop Menu-->
            </div>
            <!--End Main Navigation Desktop-->
           
        </div>
    </div>
</header>
<!--End Header-->
<!--Mobile Menu-->
<div class="mobile-nav-wrapper" role="navigation">
    <div class="closemobileMenu"><i class="icon an an-times-l pull-right"></i> Close Menu</div>
    <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1 parent megamenu"><a href="/">Home </a></li>
        <li class="lvl1 parent megamenu"><a href="/product">Shop</a></li>
        <li class="lvl1 parent megamenu"><a href="/faq">FAQ </a></li>
        <li class="lvl1 parent megamenu"><a href="/about">About Us </a></li>
        <li class="lvl1 parent dropdown"><a href="javascript:void()">What We Do <i class="an an-angle-down-l"></i></a>
            <ul class="dropdown">
                <li><a href="{{ route('sale_of_solar_panels') }}" class="site-nav">Sale of Inverter Solution & Solar Panels</a></li>
                <li><a href="/our-services/meeting-room-projector" class="site-nav">Solar Panels & Inverter Installations</a></li>
                <li><a href="/our-services/after-sales-services" class="site-nav">After-Sales Services</a></li>
            </ul>
        </li>
        <li class="lvl1 parent megamenu"><a href="/cart"> Cart </a></li>
        <li class="lvl1 parent dropdown"><a href="javascript:void()">Blog <i class="an an-angle-down-l"></i></a>
            <ul class="dropdown">
                <li><a href="/blog" class="site-nav">Why you need a Power station</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--End Mobile Menu-->