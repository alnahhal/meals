@extends('layouts.app')
<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

         Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                height: 100%;
                font-family: 'Nunito', sans-serif;
                margin: 0;
                padding: 0;
                overflow-x: hidden;
            }
            .section{
                background-image: url("photos/2.jpg");
                background-size: cover;
                width:100% ;
                height: 690px;
                background-position: center center;
            }
            .product-img {
               height: 330px; /* set the desired height here */
               object-fit: cover; /* scale and crop the image to fit */
            }
            .chef{
                margin-top:160px;
            }
            .second{
                box-shadow: 2px 2px 5px rgba(0.3, 0.3, 0.3, 0.3);
                margin-top:85px;
                width:498px;
                padding:5px 9px;
                border-radius:3px;
               
            }
            .service{
              margin-top:180px;
              text-align:center;
              margin-bottom:100px;
            }
            .my-icon {
              font-size: 33px;
              margin-bottom:20px;
              
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
    </head>
    <body >
    <div class="section" >
            <div id="app">
        <nav  class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
               
            <a class="navbar-brand" href="#">
            <!-- <img src="photos/Chef-restaurant-logo-by-DEEMKA-STUDIO-4-580x348.jpg" alt="Logo" width="90" height="70" class="d-inline-block "> -->
                <span style="color:white;font-size:2.2rem;font-weight: bold;letter-spacing: 2px">Meals</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a style="color:white;font-size:1.1rem;margin-right:5px;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a style="color:white;font-size:1.1rem;"  class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @endguest
                            </ul>
                </div>
                </div>
                </nav>
        </div>

        

        </div>
        
        <div class="container my-5">
            <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 my-3" data-aos="fade-up">
            <div class="card h-100">
            <img height="250px" width="100px" src="photos/Roast-chicken.jpg" class="card-img-top product-img" alt="...">
                <div class="card-body">
                    <h2 class="card-title" style="color:#d7973c;">Grilled chicken</h2>
                    <p style="font-size:16px;" class="card-text">From the finest types of chicken grilled on charcoal with BBQ sauce</p>
                </div>
            </div>
            </div>


            <div class="col-sm-12 col-md-6 col-lg-4 my-3" data-aos="fade-up">
            <div class="card h-100">
            <img height="250px" width="100px" src="photos/Ingredientes-Waraq-el-Enab.jpg" class="card-img-top product-img" alt="...">
                <div class="card-body">
                <h2 class="card-title" style="color:#d7973c;">Mahshy</h2>
                    <p style="font-size:16px;" class="card-text">Stuffed fresh grape leaves with lemon sauce</p>
                </div>
            </div>
            </div>


            <div class="col-sm-12 col-md-6 col-lg-4 my-3" data-aos="fade-up">
            <div class="card h-100">
            <img height="250px" width="100px" src="photos/26-06-22-215672689.jpg" class="card-img-top product-img" alt="...">
                <div class="card-body">
                    <h2 class="card-title" style="color:#d7973c;">Kapsa</h2>
                    <p style="font-size:16px;" class="card-text"> Vey delicious rice dish made with lamb</p>
                </div>
            </div>
            </div>
        </div>
        </div>


<div class="chef">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="zoom-in" >
                    <img style="width:100%;height:100%;" src="photos/Gormet-cooking.jpg" alt="">

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="zoom-in" >
                    <div class="second">
                    <h2  style="color:#d7973c;">Good Quality</h2>
                    <br>
                    <p>
                    We offer you the finest types of food because we fear for your health,<br> we have many skilled chefs, we assure you that you will enjoy with us</p>
                    Not every dish is going to appeal to the market. Not every theme is going to get a standing ovation. Not every flavour combination is going to be <br> an absolute winner. And that’s okay.
                    What matters is that we tried, and we gave it our all.
                </p>
                </div>
            </div>
        </div>
        </div>
        </div>


        <div class="service ">
        <h2 style="color:#c8a97e;font-family:Great Vibes, cursive;font-size:40px;">Services</h2>
        <br><br>
            <div class="container">
                <div class="row">
                   
                <div class="col-lg-4 col-md-4 col-sm-12 my-2" >
                <div class="card h-100">
                <div class="card-body">
                <i class="fa-solid fa-bowl-food my-icon"  style="color: #c8a97e;"></i>
                <h2 class="card-title" style="color:#c8a97e;">Wedding Party</h2>
                <p >We will provide you with the finest types of food. We will offer you different types of meat, chicken and sweets</p>
                </div>
            </div>
                
                   


                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 my-2">
                <div class="card h-100">
                <div class="card-body">
                <i class="fa-solid fa-cake-candles my-icon" style="color: #c8a97e;"></i>
                <h2 class="card-title" style="color:#c8a97e;">Birthday Party</h2>
                <p >We will provide you with the finest types of food. We will offer you different types of meat, chicken and sweets</p>
                </div>
            </div>


                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 my-2">
                <div class="card h-100">
                <div class="card-body">
                <i class="fa-solid fa-utensils my-icon" style="color: #c8a97e;"></i>
                <h2 class="card-title" style="color:#c8a97e;"> Feast</h2>
                <p >We will provide you with the finest types of food. We will offer you different types of meat, chicken and sweets</p>
                </div>
            </div>

                </div>
                </div>
            </div>
        </div>
        

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
       





        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
        offset: 200,
        duration: 2000,
        easing: 'ease-in-out'
    });
  </script>
    </body>
</html>