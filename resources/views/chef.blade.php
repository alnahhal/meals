<html>
    <head>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    </head>
    </html>

@extends('layouts.app')

@section('content')


<!-- <div class="section">
<img src="photos/chefss.jpg" class="img-fluid" alt="background image">
</div> -->
<div class="containerfluid">
    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
    <div class="back">
    <div class="text">
        <p>Chefs</p>
    </div>
</div>

    </div>
</div>
</div>
<div class="container text-center box">

<div class="header text-center">
  <h2>Chef</h2>
  <h3>Our Master Chef</h3>
</div>

<br>
    <div class="row">
    @foreach($vendors as $vendor)
        <div class="col-sm-12 col-md-6 col-lg-4 my-3">
            <div class="card h-100">
            <img height="250px" width="100px" src="photos/Gormet-cooking.jpg" class="card-img-top product-img" alt="...">
                <div class="card-body">
                    <h2 style="color:#bb9661;" class="card-title">{{$vendor->name}}</h2>
                    <p style="font-size:16px;" class="card-text">{{$vendor->description}}</p>
                </div>
            </div>
        </div>
   @endforeach
    </div>
</div>


<!-- Footer -->
<footer class="footer-20192" style="margin-top:120px;">
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
                <li><a href="#">About</a></li>
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
              <p><i class="fa-solid fa-envelope mx-1" style="color: #ffffff;"></i> tastymeals02@gmail.com</p>
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
    font-family: 'Nunito', sans-serif;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
 }   

.back{
    background-image:url('photos/chefss.jpg');
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
    width:100% ;
    height: 400px;
    margin-top:0px;
            
 }
.text{
    position: relative;
    text-align:center;
    top:220px;
}
.text p{
    color:white;
    font-size: 3.8rem;
    font-weight: bold;
    text-shadow: -2px 2px 4px #000000;
    text-shadow: #fd934d;
    }
    .box{
        margin-top:190px;
        margin-bottom:180px;
    }
.header {
  position: relative;
  
}

.header h3 {
  font-size: 33px;
  font-weight:900;
  font-family: Arial, Helvetica, sans-serif;

  
  
}

.header h2 {
  position: absolute;
  top: -36px;
  left: 46.3%;
  font-size:55px;
  letter-spacing:1px;
  color:#c8a97e;
  font-family: 'Dancing Script';
  font-weight: lighter;
  z-index:-1;
}
.card{
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
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