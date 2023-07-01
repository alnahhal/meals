<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Meal;
use App\Models\Cart;
use App\Models\Vendor;
use App\Models\User;


class CartController extends Controller
{
    public function addToCart (Request $request ,$id){
        if(Auth::id()){
            $user =  Auth::user();
           
            $meal = meal::find($id);
           
           $old_meal =  cart::where('meal_id',$id)->first();
            if ($old_meal) {
               $old_meal->quantity += $request->quantity ; 
            
               $old_meal->save();
               return redirect()->back()->with('success', 'increasing quantity');
            }
            $cart = new cart();
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;
            $cart->meal_title = $meal->title;
            $cart->price = $meal->price * $request->quantity;
            $cart->image = $meal->image;
            $cart->meal_id = $meal->id;
            $cart->quantity = $request->quantity;
          
            $cart->save();
            return redirect()->back()->with('success', 'Meal add to cart successfully!');
        }
        else {
            return redirect('login'); 
        } 
        
    }
 
    public function show_cart(){
        $id = Auth::user()->id;
        $cart = Cart::where('user_id',$id)->get();
         return view('show_cart',compact('cart'));
     }

     public function remove_cart($id){

        $cart=cart::find($id);
        $cart->delete();
       
        return redirect()->back();
        
       }

}
