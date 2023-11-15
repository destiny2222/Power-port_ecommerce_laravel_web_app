@extends('layouts.main')
@section('content')

<!--Collection Banner-->
<div class="collection-header">
    <div class="collection-hero">
        <div class="collection-hero__image"></div>
        <div class="collection-hero__title-wrapper container">
            <h1 class="collection-hero__title">Contact</h1>
            <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="/" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">Contact</span></div>
        </div>
    </div>
</div>
<!--End Collection Banner-->


 <!--Main Content-->
 <div class="container contact-pstyle2">

    <!-- Contact Form - Details -->
    <div class="row">
        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
            <!-- Contact Form -->
            <div class="formFeilds contact-form form-vertical mt-2 mt-md-2">
                {{-- <h1 class="text-center text-capitalize mb-4">Drop Us A Line</h1> --}}
                <form action="/contact/store"  method="post" id="contact-form" class="contact-form">
                    @csrf	
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" id="ContactFormName" name="fname" class="form-control" placeholder="Name" />
                                
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">                               
                            <div class="form-group">
                                <input type="email" id="ContactFormEmail" name="email" class="form-control" placeholder="Email" />
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <input type="text" id="ContactSubject" name="subject" class="form-control" placeholder="Subject" />
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <textarea id="ContactFormMessage" name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                               
                            </div>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group mailsendbtn mb-0 w-100">	
                                <input class="btn w-100 rounded" type="submit"  value="Send Message" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Contact Form -->
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
            <!-- Contact Details -->
            <div class="contact-details">
                <ul class="list-unstyled">
                    <li class="mb-4 address"><strong class="d-block mb-2">ADDRESS :</strong><p class="m-0"><i class="icon an an-map-marker-al me-2 d-none"></i> 55 Gallaxy Enque, 2568 steet, 23568 NY</p></li>
                    <li class="mb-3 phone"><strong>PHONE : </strong><i class="icon an an-phone me-2 d-none"></i> 40 000 000 0000</li>
                    <li class="email"><strong>EMAIL:</strong><i class="icon an an-envelope-l me-2 d-none"></i> info@example.com</li>
                </ul>
                <hr>
                <div class="open-hours"><strong class="d-block mb-2">OPENING HOURS</strong>
                    Mon - Sat : 8:00am -  6:00pm
                </div>
            </div>
            <!-- End Contact Details -->
        </div>
    </div>
    <!-- End Contact Form - Details -->

   
</div>
<!--End Main Content-->





@endsection