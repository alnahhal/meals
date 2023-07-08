<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\User;
use App\Models\Cart;
class OrderController extends Controller
{
    public function cash_order(){
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

       $order->payment_status='cash on delivery';
       $order->delivery_status='processing';
       $order->save();
       $cart_id=$data->id;
       $cart= cart::find( $cart_id);
       $cart->delete();
     }
    
        return redirect()->back()->with('message','We have received your order .We will connect with you soon ....'); 
    
    
     
    }
    public function show_orders(){
     // Get all the carts grouped by user_id and sum the prices
         $totals = Order::selectRaw('user_id,email,name,address,phone ,sum(price)  as total_price')
          ->groupBy('user_id','email','address','name','phone')
            ->get();

   
     $order = Order::all();

       return view('admin_show_orders',compact('order','totals'));

    }
    public function delivered($id){
      $order = Order::find($id);
      $order->delivery_status="delivered";
      $order->payment_status="paid";
      $order->save();
      return redirect()->back();
      
    }
}
