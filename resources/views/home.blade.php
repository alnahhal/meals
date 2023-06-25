@extends('layouts.app')

@section('content')
<div class="containerfluid">
    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
    <div class="back">
    <div class="text">
        <p>Our Meals</p>
    </div>
</div>

    </div>
</div>
</div>


<div class="container">
    <div class="row">
    @foreach($meals as $meal)
        <div class="col-sm-12 col-md-6 col-lg-4 my-3">
            <div class="card h-100">
            <img height="250px" width="100px" src="{{asset('/storage/images/meals/'.$meal->image)}}" class="card-img-top product-img" alt="...">
                <div class="card-body">
                    <h3 class="card-title">{{$meal->title}}</h3>
                    <p class="card-text"><span class="card-item">Price:</span> <span class="price">{{$meal->price}}</span> <b>EGP</b></p>
                    <p class="card-text"><span class="card-item">Description:</span> <br>{{$meal->description}}</p>
                    <br>
                    <a href="#" class="btn btn-primary click">Order now</a>
                </div>
            </div>
        </div>
   @endforeach
    </div>
</div>
@endsection

@section('styles')
    <style>
        .back{
            background-image:url('photos/background.jpg');
            background-position: center;
            background-size: cover;
            width:100% ;
            height: 600px;
            margin-top:0px;
            
        }
        .text{
        position: relative;
        text-align:center;
        top:230px;
       }
    .text p{
    color:white;
    font-size: 4.7rem;
    font-weight: bold;
    text-shadow: -2px 2px 4px #000000;
    text-shadow: #fd934d;
    }
    .product-img {
    height: 330px; /* set the desired height here */
    object-fit: cover; /* scale and crop the image to fit */
}
.click{
    background: #c8a97e;
    border: 1px solid #c8a97e;
    color: #fff;
    font-size:16px;
}
.click:hover{
    color: #c8a97e;
    border: 1px solid #c8a97e;
    background: #fff;
}
.navbar-nav .icon{
    color:black;
    font-weight: bold;
    font-size:16px;
    margin-left:10px;
    margin-top:6px;
}

        
    </style>
@endsection
