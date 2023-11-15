<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{


public function cartpage(Request $request)
{
    $session_id = session()->getId();
    $cart = Cart::where('session_id', $session_id)->get();
    // Update the cookie with the latest cart data
    $cartData = $cart->map(function ($item) {
        return [
            'product_id' => $item->product_id,
            'quantity' => $item->quantity
        ];
    });

    return view('frontpage.cart', compact('cart'))->withCookie(cookie('cart', json_encode($cartData), 1440));
}





public function addToCart(Request $request)
{
    $product_id = $request->input('product_id');
    $session_id = session()->getId();
    $quantity = $request->input('quantity');
    // Check if the item already exists in the cart
    $existingCartItem = Cart::where('session_id', $session_id)->where('product_id', $product_id)->first();

    if ($existingCartItem) {
        // Update the quantity of the existing item
        $existingCartItem->update([
            'quantity' => $existingCartItem->quantity + $quantity,
        ]);
    } else {
        // Create a new cart item
        Cart::create([
            'session_id' => $session_id,
            'product_id' => $product_id,
            'quantity' => $quantity
        ]);
    }

    // Update the cookie with the new cart data
    $cart = Cart::where('session_id', $session_id)->get();
    $cartData = $cart->map(function ($item) {
        return [
            'product_id' => $item->product_id,
            'quantity' => $item->quantity
        ];
    });

    return redirect()->route('cart-page')->withCookie(cookie('cart', json_encode($cartData), 1440))->with('success', 'Add to cart successfully');
    
}


// public function update(Request $request)
// {
//     $quantities = $request->input('updates');
//     $cartIds = $request->input('cart_id'); 

//     // dd($quantities, $cartIds);
//     // Check if $quantities and $cartIds are not null
//     if ($quantities && $cartIds) {
//         foreach ($quantities as $index => $quantity) {
//             $cart = Cart::find($cartIds[$index]);
//             $cart->quantity = $quantity;
//             $cart->total = $cart->product->price * $quantity;
//             $cart->save();
//         }

//         return back()->with('success', 'Cart updated successfully');
//     } else {
//         return back()->with('error', 'Invalid request. Please try again.');
//     }
// }


public function increment($id)
{
    $cart = Cart::find($id);
    if($cart){
        $cart->quantity += 1;
        $cart->total = $cart->product->price * $cart->quantity;
        $cart->save();

        return back()->with('success', 'Cart updated successfully');
    }else {
        return back()->with('error', 'An error occurred');
     }
}

public function decrement($id)
{
    $cart = Cart::find($id);
   if ($cart) {
        $cart->quantity -= 1;

        if ($cart->quantity < 1) {
            $cart->delete();
        } else {
            $cart->total = $cart->product->price * $cart->quantity;
            $cart->save();
        }

        return back()->with('success', 'Cart updated successfully');
   } else {
      return back()->with('error', 'An error occurred');
   }
   
}




public function remove(Cart $cart)
{
    $session_id = session()->getId();

    // Find the cart item that matches the product ID
    $cartItem = Cart::where('session_id', $session_id)
                   ->where('product_id', $cart->product->id)
                   ->first();

    if ($cartItem) {
        // Delete the cart item from the database
        $cartItem->delete();
    }

    // Get the updated cart items for the current session
    $cart = Cart::where('session_id', $session_id)->get();

    // Update the cookie with the modified cart data
    $cartData = $cart->map(function ($item) {
        return [
            'product_id' => $item->product_id,
            'quantity' => $item->quantity
        ];
    });

    return redirect()->route('cart-page')->withCookie(cookie('cart', json_encode($cartData), 1440))->with('success', 'Deleted cart successfully');
}


}
