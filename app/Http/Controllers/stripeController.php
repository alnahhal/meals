<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Stripe;

class stripeController extends Controller
{
    public function stripe($totalprice){

        return view('stripe',compact('totalprice'));

    } 

  

    public function stripePost(Request $request, $totalprice)
    {

       
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $totalprice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thanks for payment" 
        ]);
        $user = Auth::user();

        $userid = $user->id;
        $data = cart::where('user_id',$userid)->get();
   
        foreach ($data as $data) {
          $order = new order;
          $order->name =$data->name;
          $order->email =$data->email;
          $order->phone =$data->phone;
          $order->address =$data->address;
          $order->user_id =$data->user_id;
          $order->meal_title =$data->meal_title;
          $order->price =$data->price;
          $order->quantity =$data->quantity;
          $order->image =$data->image;
          $order->meal_id =$data->meal_id;
   
          $order->payment_status='paid';
          $order->delivery_status='processing';
          $order->save();
          $cart_id=$data->id;
          $cart= cart::find( $cart_id);
          $cart->delete();
        }
        Session::flash('success', 'Payment successful!');
              
        return back();
    }
}
