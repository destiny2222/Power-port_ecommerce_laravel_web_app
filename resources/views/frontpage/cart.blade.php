@extends('layouts.main')
@section('content')

    <!--Collection Banner-->
        <div class="collection-header">
            <div class="collection-hero">
                <div class="collection-hero__image"></div>
                <div class="collection-hero__title-wrapper container">
                    <h1 class="collection-hero__title">Cart </h1>
                    <div class="breadcrumbs text-uppercase mt-1 mt-lg-2">
                        <a href="/" title="Back to the home page">Home</a>
                        <span>|</span>
                        <span class="fw-bold">Cart </span>
                    </div>
                </div>
            </div>
        </div>
   <!--End Collection Banner-->

    <!--Main Content-->
    <div class="container">
        <!--Cart Page-->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                @if (count($cart) != 0)
                        <table class="align-middle">
                            <thead class="cart__row cart__header small--hide">
                                <tr>
                                    <th class="action">&nbsp;</th>
                                    <th colspan="2" class="text-start">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                    
                                @forelse ($cart as $carts)
                                    {{-- <input type="hidden" name="cart_id[]" value="{{ $carts->id }}"> --}}
                                    <tr class="cart__row border-bottom line1 cart-flex border-top">
                                        <td class="cart-delete text-center small--hide">
                                           <form action="{{ route('cart.remove', $carts->id) }}" method="post">
                                             @csrf
                                             @method('delete')
                                             <button type="submit"  class="btn btn--secondary cart__remove remove-icon position-static" 
                                             title="Remove item">
                                             <i class="icon an an-times-r"></i>
                                           </button>
                                          </form>
                                        </td>
                                        <td class="cart__image-wrapper cart-flex-item">
                                            <a href="javascript:void()">
                                                <img class="cart__image blur-up lazyload" data-src="{{  asset('upload/product/'.$carts->product->image) }}" src="{{  asset('upload/product/'.$carts->product->image) }}" alt="Sunset Sleep Scarf Top" width="80" />
                                            </a>
                                        </td>
                                        <td class="cart__meta small--text-left cart-flex-item">
                                            <div class="list-view-item__title">
                                                <a href="javascript:void()">{{  $carts->product->name }}</a>
                                            </div>
                                            <div class="cart__meta-text">
                                                Qty: {{  $carts->quantity }}
                                            </div>
                                            <div class="cart-price d-md-none">
                                                <span class="money fw-500">₦{{  number_format( $carts->product->price, 2) }}</span>
                                            </div>
                                        </td>
                                        <td class="cart__price-wrapper cart-flex-item text-center small--hide">
                                            <span class="money">₦{{  number_format( $carts->product->price, 2) }}</span>
                                        </td>
                                        <td class="cart__update-wrapper cart-flex-item text-end text-md-center">
                                            <div class="cart__qty d-flex justify-content-end justify-content-md-center">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('update-minus-{{ $carts->id }}').submit();"><i class="icon an an-minus-r"></i></a>
                                                    <form action="{{ route('cart.decrement', $carts->id) }}" method="post" class="d-none" id="update-minus-{{ $carts->id }}">
                                                        @csrf
                                                        @method('put')
                                                    </form>
                                                    <input class="cart__qty-input qty" type="text" value="{{ $carts->quantity }}"/>
                                                    <a class="qtyBtn plus" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('update-plus-{{ $carts->id }}').submit();"><i class="icon an an-plus-r"></i></a>
                                                    <form action="{{ route('cart.increment', $carts->id) }}" id="update-plus-{{ $carts->id }}" class="d-none" method="post">
                                                        @csrf
                                                        @method('put')
                                                    </form>
                                                </div>
                                            </div>
                                            
                                            <a href="javascript:void()" title="Remove" class="removeMb d-md-none d-inline-block mt-2 me-3" onclick="event.preventDefault(); document.getElementById('removeCart-{{ $carts->id }}').submit();">Remove</a>
                                            <form action="{{ route('cart.remove', $carts->id) }}" id="removeCart-{{ $carts->id }}" class="d-none" method="post">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                        <td class="cart-price cart-flex-item text-center small--hide">
                                            <span class="money fw-500">₦ {{ number_format($carts->product->price * $carts->quantity, 2) }}</span>
                                        </td>
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center">Your cart is currently empty.</td>
                                </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6" class="text-end  pt-3">
                                        <a href="/checkout" class="btn btn-primary d-inline-flex rounded align-items-center cart-continue">
                                            {{-- <i class="me-1 icon an an-angle-left-l"></i> --}}
                                            <span class="text-decoration-none">Proceed To Checkout</span>
                                        </a>
                                    </td>
                                    
                                </tr> 
                            </tfoot>
                        </table>
                @else
                 <div class="">
                    <h2  class="text-center">Your cart is currently empty.</h2>
                    <div  class="text-center  pt-3 pb-4 ">
                        <a href="/product" class="btn btn-primary d-inline-flex rounded align-items-center cart-continue">
                            {{-- <i class="me-1 icon an an-angle-left-l"></i> --}}
                            <span class="text-decoration-none">Shop Now</span>
                        </a>
                    </div>
                 </div>
                @endif  
            </div>
        </div>
        <!--End Cart Page-->
    </div>
    <!--End Main Content-->

@endsection