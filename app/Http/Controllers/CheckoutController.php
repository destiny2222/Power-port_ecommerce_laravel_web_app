<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Unicodeveloper\Paystack\Facades\Paystack;

class CheckoutController extends Controller
{
    
    public function checkout(){
        $session_id = session()->getId();
        $cart = Cart::where("session_id", $session_id)->get();
        // dd($cart);
        return view('frontpage.checkout', compact('cart'));
    }


    public function payment(Request $request){
        $session_id = session()->getId();
        $cartItems = Cart::where('session_id', $session_id)->get();
        $selectedPaymentMethod = $request->input('payment_method');
        $totalamount = $request->input('total');

        $totalamount1 = (float) preg_replace('/[^0-9.]/', '', $totalamount);
        
        $requestData = [];
        if ($selectedPaymentMethod == 'direct') {
            

        } elseif ($selectedPaymentMethod == 'paystack') {
            
            if($cartItems->count() > 0){
                $order = Order::create([
                    'name' => $request->input('name'),
                    'lastname' => $request->input('lastname'),
                    'reference' => $request->input('reference'),
                    'email' => $request->input('email'),
                    'phone_number' => $request->input('phone_number'),
                    'address' => $request->input('address'),
                    'billing_address' => $request->input('billing_address'),
                    'city'=>$request->input('city'),
                    'state'=>$request->input('state'),
                    'note'=> $request->input('note'),
                    'country_code'=>$request->input('country_code'),
                    'total' => $cartItems->sum('total'),
                ]);
                $productInfo = [];
                   
                foreach ($cartItems as $item) {
                    $order->items()->create([
                        'order_id' => $order->id,
                        'product_id' => $item->product_id,
                        'quantity' => $item->quantity,
                        'price' => $item->product->price,  
                        'session_id'=> $item->session_id,                                
                    ]);
        
                    $product = Product::find($item->product_id);
                    $productInfo[] = [
                        'name' => $product->name,
                        'price' => $product->price
                    ];
        
                    $item->delete();
                }
                // session()->forget('cart');           
                $request->session()->flush();

                $paymentData = [
                    'email' => $request->input('email'),
                    'amount' => $totalamount1 * 100,
                    "reference" => $request->input('reference'),
                    "currency" => "NGN",
                    'metadata' => [
                        'order_id' => $order->id
                    ],
                ];
                return Paystack::getAuthorizationUrl($paymentData)->redirectNow();
            }
    
            return back()->with('error', 'The paystack token has expired. Please refresh the page and try again');
        }else{

        }
        
    }


    public function handlePaymentCallback(Request $request)
{
    $paystack = new Paystack();
    $paymentDetails = $paystack->getPaymentData();

    if ($paymentDetails['status'] === 'success') {
        // Payment was successful, update order status
        $order = Order::find($paymentDetails['metadata']['order_id']);
        $order->status = 'completed';
        $order->payment_reference = $paymentDetails['reference'];
        $order->save();

        // Payment::create([
        //     'order_id' => $order->id,
        //     'payment_reference' => $paymentDetails['reference'],
        //     'amount' => $paymentDetails['amount'] / 100, 
        // ]);
        // Optionally, send a confirmation email to the user here
        return view('frontpage.sucess', ['order' => $order])->withCookie(cookie('cart', null, -1));
    } else {
        // Payment failed, handle accordingly
        return back()->with('error', 'Payment failed');
    }
}


}
