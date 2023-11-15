@extends('layouts.main')
@section('content')
     <!--Collection Banner-->
     <div class="collection-header">
        <div class="collection-hero m-0">
            <div class="collection-hero__image"></div>
            <div class="collection-hero__title-wrapper container">
                <h1 class="collection-hero__title">Service</h1>
                <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="/" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">Service</span></div>
            </div>
        </div>
    </div>
    <!--End Collection Banner-->


  <div class="container py-5">
      <div class="row justify-content-center align-items-center">
          <div class="col-lg-12">
            <div class="owl-carousel owl-theme">
                <div class="item"><img src="/vendors/assets/images/slideshow/1.jpg" alt=""></div>
                <div class="item"><img src="/vendors/assets/images/slideshow/2.jpg" alt=""></div>
                <div class="item"><img src="/vendors/assets/images/slideshow/3.jpg" alt=""></div>
                <div class="item"><img src="/vendors/assets/images/slideshow/1.jpg" alt=""></div>
                <div class="item"><img src="/vendors/assets/images/slideshow/2.jpg" alt=""></div>
                <div class="item"><img src="/vendors/assets/images/slideshow/3.jpg" alt=""></div>
            </div>
          </div>
      </div>
  </div>


  <div class="section about-service bg-light py-5">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-lg-12 text-center mb-3">
                <h1>On-Energy Solar Inverter Systems</h1>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center">
                <div class="service-info shadow p-4">
                    <i class="icon an an-dollar-sign-l mb-3 fs-2"></i>
                    <div class="text">
                        <h4 class="text-uppercase">Solar PV engineering, Installation and procurement</h4>
                        <p>
                            We supply and install high quality components using our crew of highly trained professionals. 
                            Making sure you are fully satified 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center" style="padding-bottom:50px;">
                <div class="service-info shadow p-4">
                    <i class="icon an an-bar-chart mb-3 fs-2"></i>
                    <div class="text">
                        <h4 class="text-uppercase">Energy efficient assessment</h4>
                        <p>
                            We make use of detailed energy usage data from our customers to make sure our installations meet your energy demands
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center" style="padding-bottom:50px;">
                <div class="service-info shadow p-4">
                    <i class="icon an an-truck-l mb-3 fs-2"></i>
                    <div class="text">
                        <h4 class="text-uppercase">Cost effective  Assessment </h4>
                        <p>We give you the most affordable system that will take care of your power needs</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center" style="padding-bottom:50px;">
                <div class="service-info shadow p-4">
                    <i class="icon an an-podcast-l mb-3 fs-2"></i>
                    <div class="text">
                        <h4 class="text-uppercase">Maintenance and Performance monitoring</h4>
                        <p>Our well executed maintenance process gives your installation long term optimum performance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Blog Post-->
<section class="section home-blog-post">
    <div class="container">
        <div class="section-header">
            <h2>SOME OF OUR WORKS</h2>
        </div>
        <div class="row">
            @foreach ($project as $projects)
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="blog-post-slider">
                    <div class="blogpost-item">
                        <a  class="post-thumb">
                            <img class="blur-up lazyload" src="{{  asset('upload/project/'.$projects->image)  }}" data-src="{{  asset('upload/project/'.$projects->image)  }}" width="380" height="205" alt="image" title=""/>
                        </a>
                        <div class="post-detail">
                            <h3 class="post-title mb-3">{{   $projects->name    }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--End Blog Post-->


@endsection    