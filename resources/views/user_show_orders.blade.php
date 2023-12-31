@extends('layouts.app')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @section('content')
    <div class="container  text-center  " style="margin-top: 20px">
        <h1 class="text-center">Your Orders</h1>
        <div class="m-4">
            <table class="table table-hover table-bordered ">
                <tr class="table-danger">
                   
                    <th>Image</th>
                   <th>Title</th>
                   <th>Quantity</th>
                   <th>Price</th> 
                    <th>Payment Status</th>
                    <th>Delivery Status</th>
                   <th>Created At</th>
                 
                  
                </tr>
               
                @foreach($orders as $order)
   
   
                <tr >
                
                    <td style="  text-align: center;"><img style="width: 200px  ; height :200px" src="{{ asset('/storage/'.$order->image) }}" ></td>
                   <td style="  text-align: center;  padding: 70px 0;"> {{$order->meal_title}} </td>
                   <td style="  text-align: center;  padding: 70px 0;"> {{$order->quantity}} </td>
                   <td style="  text-align: center;  padding: 70px 0;"> {{$order->price}} </td>
                   
                   <td style="  text-align: center;  padding: 70px 0;"> {{$order->payment_status}} </td>
                   <td style="  text-align: center;  padding: 70px 0;"> {{$order->delivery_status}} </td>
                   <td style="  text-align: center;  padding: 70px 0;"> {{$order->created_at}} </td>
                   
                </tr>
                
                @endforeach  
               
            </table>

   

    </div>
    </div>
    @endsection
</body>
</html>