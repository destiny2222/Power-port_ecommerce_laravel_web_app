@extends('layouts.main')
@section('content')

<!--Collection Banner-->
<div class="collection-header">
    <div class="collection-hero">
        <div class="collection-hero__image"></div>
        <div class="collection-hero__title-wrapper container">
            <h2 class="collection-hero__title">404 Error Page</h2>
            <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="/" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">404 Error Page</span></div>
        </div>
    </div>
</div>
<!--End Collection Banner-->

<!--Main Content-->
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <div class="error-content py-4">
                <img src="/vendors/assets/images/error-404.jpg" alt="error-404" />
                <div class="page-title"><h1>404 - PAGE NOT FOUND</h1></div>
                <p>We can't seem to find page you are looking for.</p>
                <p><a href="/" class="btn btn-outline-primary rounded text-capitalize mb-2 me-2">Go Back</a><a href="/product" class="btn rounded mb-2 text-capitalize">Continue shopping</a></p>
            </div>
        </div>
    </div>
</div>
<!--End Main Content-->

@endsection