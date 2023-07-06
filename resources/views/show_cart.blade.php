@extends('layouts.nav_cart')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
</head>
<body>
   @section( 'content')

     <div class="contanier">
      <div class="m-4">
         <table class="table table-hover table-bordered ">
             <tr class="table-danger">
                <th>image</th>
                <th>Meal name</th>
                <th>price</th>
                <th>quantity</th>
                <th>Action</th>
             </tr>
             <?php  $totalprice=0 ?>
             @foreach($cart as $cart)


             <tr >
                <td style="  text-align: center;"><img style="width: 200px  ; height :200px" src="{{ asset('/storage/'.$cart->image) }}" ></td>
                <td  style="  text-align: center;   padding: 70px 0;">{{$cart->meal_title}}</td>
                <td style="  text-align: center;  padding: 70px 0;">  {{$cart->price}} EGP</td>
                <td style="  text-align: center;  padding: 70px 0;">{{$cart->quantity}}</td>
                <td style="  text-align: center;   padding: 70px 0;"><a onclick="return confirm('Are you sure delete this meal?')" class="btn btn-danger" href="{{route('remove_cart',$cart->id)}}">Remove Meal</a></td>

             </tr>
             <?php  $totalprice=  $totalprice + $cart->price 
            
           
             ?>
             @endforeach

         </table>
         
         <div class="container">
            <div class="row">
               <div class="col-9">
                  <h1 style="font-size: 20px;padding : 40px">Total Price : {{$totalprice}} EGP</h1>
               </div>
                  <div  class="col-3">
                     <h1   style="font-size: 20px;padding-left: 50px">Proceed To Order</h1>
                    
                     <a href="{{route('cash_order')}} " class="btn btn-danger">Cash On Delivery</a>
                     <a href="{{route('stripe.post',$totalprice)}}" class="btn btn-danger">Pay Using Card</a>
                  </div>
               </div>
            </div>
      
     
      </div>
    
    
   @endsection
</div> 
</body>
</html>