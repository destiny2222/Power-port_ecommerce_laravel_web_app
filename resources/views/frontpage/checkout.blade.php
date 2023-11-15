@extends('layouts.main')
@section('content')

<!--Collection Banner-->
<div class="collection-header">
    <div class="collection-hero">
        <div class="collection-hero__image"></div>
        <div class="collection-hero__title-wrapper container">
            <h1 class="collection-hero__title">Checkout </h1>
            <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="/" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">Checkout </span></div>
        </div>
    </div>
</div>
<!--End Collection Banner-->

<!--Main Content-->
<div class="container">
    <form method="post" action="{{  route('checkout.process') }}" method="POST">
        @csrf
    <div class="row billing-fields">
        <div class="col-lg-6 col-md-12 col-sm-12 mb-3 mb-lg-0 pb-5 pt-5">
            <div class="create-ac-content">
                
                    <fieldset>
                        <h2 class="login-title mb-3">Shipping Address</h2>
                        <div class="row">
                            <div class="form-group col-md-6 col-lg-6">
                                <label for="input-firstname">First Name <span class="required-f">*</span></label>
                                <input name="name" value="" id="input-firstname" type="text" required>
                            </div>
                            <div class="form-group col-md-6 col-lg-6">
                                <label for="input-lastname">Last Name <span class="required-f">*</span></label>
                                <input name="lastname" value="" id="input-lastname" type="text" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-lg-6">
                                <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                <input name="email" value="" id="input-email" type="email" required>
                            </div>
                            <div class="form-group col-md-6 col-lg-6">
                                <label for="input-telephone">Telephone <span class="required-f">*</span></label>
                                <input name="phone_number" value="" id="input-telephone" type="tel" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 col-lg-12">
                                <label for="input-address-1">Address <span class="required-f">*</span></label>
                                <input name="address" value="" id="input-address-1" type="text" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 col-lg-12">
                                <label for="input-address-2">Apartment <span class="required-f">*</span></label>
                                <input name="billing_address" value="" id="input-address-2" type="text" required>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-lg-6">
                                <label for="input-city">City <span class="required-f">*</span></label>
                                <input name="city" value="" id="input-city" type="text" required>
                            </div>
                            <div class="form-group col-md-6 col-lg-6">
                                <label for="address_province2">State <span class="required-f">*</span></label>
                                <input name="state" value="" id="input-city" type="text" required>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="form-group col-md-12 col-lg-12">
                                <label for="input-postcode">Company name (optional)</label>
                                <input name="company_name" value="" id="input-postcode" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12 col-lg-12 col-xl-12 mb-0">
                                <label for="input-company">Order Notes</label>
                                <textarea name="note" class="form-control resize-both" rows="3"></textarea>
                            </div>
                        </div>
                    </fieldset>
                
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 pb-5 pt-5">
            <div class="your-order-payment">
                <div class="your-order">
                    <h2 class="order-title mb-3">Your Order</h2>
                    <div class="table-responsive order-table style2"> 
                        <table class="bg-white table table-bordered align-middle table-hover text-center mb-1">
                            <thead>
                                <tr>
                                    <th class="text-start">Product Name</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $cartItem)
                                <tr>
                                    <td class="text-start">
                                        <a href="product-layout1.html">
                                            {{  $cartItem->product->name }}
                                        </a>
                                    </td>
                                    <td>₦{{  number_format( $cartItem->product->price, 2) }}</td>
                                    <td>{{  $cartItem->quantity }}</td>
                                    <td>₦{{  number_format( $cartItem->product->price * $cartItem->quantity, 2) }}</td>
                                </tr>
                                
                                @endforeach
                            </tbody>
                            <tfoot class="font-weight-600">
                                <tr>
                                    <td colspan="3" class="text-end fw-bolder">Shipping </td>
                                    <td class="fw-bolder">free</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-end fw-bolder">Total</td>
                                    <td class="fw-bolder">
                                        ₦{{ number_format($cart->sum(function ($item) {
                                            return $item->product->price * $item->quantity;
                                        }), 2) }}
                                    </td>
                                </tr>
                            </tfoot>
                             
                        </table>
                    </div>
                </div>

                <hr>
                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                <input type="hidden" name="currency" value="NGN">
                <input type="hidden" name="total" value="{{ number_format($cart->sum(function ($item) {
                    return $item->product->price * $item->quantity;
                }), 2) }}" >
                <div class="your-payment">
                    {{-- <h2 class="payment-title mb-3">payment method</h2> --}}
                    <div class="payment-method">
                        <div class="card card--grey">
                            <div class="card-body">
                                <h2 class="pb-1 fs-6">Payment Method</h2>
                                {{-- <div class="customRadio clearfix">
                                    <input id="formcheckoutRadio1" value="direct" name="payment_method" type="radio" class="radio" checked="checked"> 
                                    <label for="formcheckoutRadio1">DIRECT BANK TRANSFER</label>
                                </div> --}}
                                <div class="customRadio clearfix">
                                    <input id="formcheckoutRadio2" value="paystack" name="payment_method" type="radio" class="radio"> 
                                    <label for="formcheckoutRadio2">Credit/Debit Card</label>
                                </div>
                            </div>
                        </div>
                        <div class="order-button-payment mt-3 clearfix">
                            <input type="submit" class="btn btn-lg rounded w-100 fw-600 text-white" value="Place order">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </form>
</div>
<!--End Main Content-->

@endsection