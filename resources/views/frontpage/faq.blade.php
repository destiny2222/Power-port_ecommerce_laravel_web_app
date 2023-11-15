@extends('layouts.main')
@section('content')


<!--Collection Banner-->
<div class="collection-header">
    <div class="collection-hero">
        <div class="collection-hero__image"></div>
        <div class="collection-hero__title-wrapper container">
            <h1 class="collection-hero__title">FAQ</h1>
            <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="/" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">FAQ</span></div>
        </div>
    </div>
</div>
<!--End Collection Banner-->

<!--Main Content-->
<div class="container">
    <!-- FAQ's Style2 -->
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="faq-style2">
                <div class="faq-body">
                    <h4 class="panel-title">Can your solar generators be recharged with solar panels?</h4>
                    <div class="panel-content">
                        <p>
                            Yes! Our solar generators can be recharged from solar panels, Grid power(NEPA), as well as generators
                            Each unit is supplied with an AC charger and an optional charge controller as well as solar panel.
                        </p>
                    </div>
                </div>
                <div class="faq-body">
                    <h4 class="panel-title">Can I use your solar generator without a solar panel?</h4>
                    <div class="panel-content">
                        <p>Yes! Our solar generators can work without solar panels, as they can be recharged from AC charger</p> 
                        
                    </div>
                </div>
                <div class="faq-body">
                    <h4 class="panel-title"> How many hours can I run your solar generator?</h4>
                    <div class="panel-content">
                        The runtime of our generators are solely dependent on your device’s power consumption. 

                        However, each model of our solar generators have detailed description of an estimated runtime for a particular type of load.
                        
                        Higher models run bigger loads and run longer than lower models
                    </div>
                </div>
                <div class="faq-body">
                    <h4 class="panel-title">Do You Ship Internationally? </h4>
                    <div class="panel-content">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                    </div>
                </div>
                <div class="faq-body">
                    <h4 class="panel-title">How many years can my generator last?</h4>
                    <div class="panel-content">
                        Our solar generators are ruggedly made to last up to 10 years. The lithium battery may grow weak over this period. It can be replaced so you keep on enjoying your generator for many more years.
                    </div>
                </div>
                <div class="faq-body">
                    <h4 class="panel-title">Can it power my fridge, Tv, etc</h4>
                    <div class="panel-content">
                        We have models that can power refrigerators, Tv sets and so much more. Each model has its own power capability
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End FAQ's Style2 -->
</div>
<!--End Main Content-->

@endsection