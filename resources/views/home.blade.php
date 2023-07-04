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

@if (auth()->check() && auth()->user()->is_admin == 0)
<div class="container my-5">
    <div class="row">
    @foreach($meals as $meal)
        <div class="col-sm-12 col-md-6 col-lg-4 my-3">
            <div class="card h-100">
            <img height="250px" width="100px" src="{{asset('/storage/'.$meal->image)}}" class="card-img-top product-img" alt="...">
                <div class="card-body">
                    <h3 class="card-title">{{$meal->title}}</h3>
                    <p class="card-text"><span class="card-item">Price:</span> <span class="price">{{$meal->price}}</span> <b>EGP</b></p>
                    <p class="card-text"><span class="card-item">Description:</span> <br>{{$meal->description}}</p>
                    <p><span class="card-item">Preparation Time:</span> {{$meal->preparation_time}} <b>Minutes</b></p>
                    <br>
                    <a href="#" class="btn btn-primary click">Order now</a>
                </div>
            </div>
        </div>
   @endforeach
    </div>
</div>
<br><br><br>
@endif

@if (auth()->check() && auth()->user()->is_admin == 1)
<div class="container my-5">
    <div class="row">
    @foreach($meals as $meal)
        <div class="col-sm-12 col-md-6 col-lg-4 my-3">
            <div class="card h-100">
            <img height="250px" width="100px" src="{{asset('/storage/'.$meal->image)}}" class="card-img-top product-img" alt="...">
                <div class="card-body">
                    <h3 class="card-title">{{$meal->title}}</h3>
                    <p class="card-text"><span class="card-item">Price:</span> <span class="price">{{$meal->price}}</span> <b>EGP</b></p>
                    <p class="card-text"><span class="card-item">Description:</span> <br>{{$meal->description}}</p>
                    <p><span class="card-item">Preparation Time:</span> {{$meal->preparation_time}} <b>Minutes</b></p>
                </div>
            </div>
        </div>
   @endforeach
    </div>
</div>
<br><br><br>
@endif



<!-- Footer -->
<footer class="footer-20192">
      <div class="site-section">
        <div class="container">

          <div class="row">

            <div class="col-sm">
              <a href="/home" class="footer-logo">Meals</a>
              <p class="copyright">
                <small>&copy; 2023</small>
              </p>
              
            </div>
            <div class="col-sm">
              <h3>Open Hours</h3>
              <ul class="list-unstyled links">
              <li class="d-flex"><span style="margin-right:64px;">Monday</span><span>10:00 - 22:00</span></li>
              <li class="d-flex"><span style="margin-right:62px;">Tuesday</span><span>10:00 - 22:00</span></li>
              <li class="d-flex"><span style="margin-right:38px;">Wednesday</span><span>10:00 - 22:00</span></li>
              <li class="d-flex"><span style="margin-right:54px;">Thursday</span><span>10:00 - 22:00</span></li>
              <li class="d-flex"><span style="margin-right:76px;">Friday</span><span>10:00 - 22:00</span></li>
              <li class="d-flex"><span style="margin-right:56px;">Saturday</span><span>10:00 - 22:00</span></li>
              <li class="d-flex"><span style="margin-right:66px;">Sunday</span><span> 10:00 - 22:00</span></li>
                
                
              </ul>

            </div>
            <div class="col-sm">
              <ul class="list-unstyled links">
                <li><a href="/home">Home</a></li>
                <li><a href="/about">About</a></li>
                <!-- <li><img src="{{asset('photos/traditional-lunch.jpg')}}" alt=""></li> -->
                <a href="#" class="thumb-menu img" style="background-image: url('photos/traditional-lunch.jpg');width: 100%; height: 200px;
                display: block;background-position: center;
                background-size: cover;">
</a>
              </ul>
            </div>
            <div class="col-md-3">
              <h3>Follow us</h3>
              <ul class="list-unstyled social">
                <li><a href="#"><span class="fa-brands fa-facebook-f"></span></a></li>
                <li><a href="#"><span class="fa-brands fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa-brands fa-linkedin-in"></span></a></li>
                <li><a href="#"><span class="fa-brands fa-telegram"></span></a></li>
                <li><a href="#"><span class="fa-brands fa-instagram"></span></a></li>
              </ul>
              <p><i class="fa-solid fa-phone mx-1" style="color: #ffffff;"></i> 01026549864</p>
              <p><i class="fa-solid fa-envelope mx-1" style="color: #ffffff;"></i> meals3167@gmail.com</p>
            </div>
            
          </div>
        </div>
        <br><br>
        <div class="text-center p-3">
       © 2023 Copyright:
       <a class="text-white" href="#">Meals project iti</a>
      </div>
      </div>
    </footer>



<!-- Footer -->
@endsection

@section('styles')
    <style>
      body {
                height: 100%;
                margin: 0;
                padding: 0;
                overflow-x: hidden;
            }
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
    margin-left:13px;
    margin-top:6px;
}


.footer-20192 {
  position: relative;
  color: #fff;
  padding: 7rem 4rem 0 0;
  background-color: #141313; }
  .footer-20192 .container {
    position: relative; }
  .footer-20192 h3 {
    font-size: 16px;
    margin-bottom: 10px;
    margin-top: 0;
    line-height: 1.5; }
  .footer-20192 .links li {
    margin-bottom: 10px;
    line-height: 1.5;
    display: block; }
    .footer-20192 .links li a {
      color: #666873; }
      .footer-20192 .links li a:hover {
        color: #fff; }
  .footer-20192 .social li {
    display: inline-block;
    position: relative; }
    .footer-20192 .social li a {
      position: relative;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: inline-block;
      margin: 0;
      padding: 0;
      background-color: #8186d5;
      color: #fff; }
      .footer-20192 .social li a > span {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); }
  .footer-20192 .footer-logo {
    color: #fff;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: .1rem; }
  .footer-20192 .copyright {
    color: #666873; }
  .footer-20192 .cta {
    -webkit-box-shadow: -20px -20px 0 0 rgba(52, 58, 64, 0.2);
    box-shadow: -20px -20px 0 0 rgba(52, 58, 64, 0.2);
    padding: 20px;
    background-color: #8186d5;
    top: -150px;
    position: relative; }
    .footer-20192 .cta h2, .footer-20192 .cta h3 {
      line-height: 1.5; }
    .footer-20192 .cta h3 {
      font-size: 20px; }

    .footer a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  .footer a, .footer a:hover {
    text-decoration: none !important; }

.footer .content {
  height: 70vh; }

 


        
    </style>
@endsection
