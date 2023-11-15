//     public function addToCart(Request $request, Product $product)
//     {

//     $product_id = $request->input('product_id');
//     $session_id = session()->getId();
//     // Check if the item already exists in the cart
//     $existingCartItem = Cart::where('session_id', $session_id)->where('product_id', $product_id)->first();
//     $quantity = $request->input('quantity');  
//     if ($existingCartItem) {
//         // Update the quantity of the existing item
//         $existingCartItem->update([
//             'quantity' => $existingCartItem->quantity + $quantity,
//             'total' => $existingCartItem->total * $quantity
//         ]);
//     } else {
//         // Create a new cart item
//         Cart::create([
//             'session_id' => $session_id,
//             'product_id' => $product_id,
//             'quantity' => $quantity,
//             'total' => $product->price * $quantity,
//         ]);
//     }


//     return redirect()->route('cart-page')->with('success', 'Product added to cart successfully');
// }


// public function addToCart(Request $request)
// {
//     $product_id = $request->input('product_id');
//     $quantity = $request->input('quantity');  
//     $cart = json_decode($request->cookie('cart'), true) ?: [];

//     // Check if the item already exists in the cart
//     $existingCartItem = null;
//     foreach ($cart as $key => $item) {
//         if ($item['product_id'] == $product_id) {
//             $existingCartItem = $key;
//             break;
//         }
//     }

//     if ($existingCartItem !== null) {
//         // Update the quantity of the existing item
//         $cart[$existingCartItem]['quantity']+ $quantity;
//     } else {
//         // Create a new cart item
//         $cart[] = [
//             'product_id' => $product_id,
//             'quantity' => $quantity
//         ];
//     }

//     return redirect()->route('cart-page')->withCookie(cookie('cart', json_encode($cart), 1440)); 
//     Session::flash('success', 'Product added to cart successfully');
// }
