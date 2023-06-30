@extends('layouts.app')

@section('content')

<div class="section">
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-lg-5 col-md-7 col-sm-7">
            <div class="card">
                <div class="card-header text-center">{{ __('Login') }}</div>

                <div class="card-body my-3">
                    <form  method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end lab">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end lab">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="click">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('styles')
<style>
   body {
    position: relative;
  background-image: url('photos/background.jpg');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  min-height: 100vh;
  height: auto;
  position: relative;
}
body::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: -1;
  background-color: rgba(0, 0, 0, 0.4); /* Optional: Add a semi-transparent overlay */
}
.card{
    margin-top:150px;
    height:;
}
.click{
    background: #c8a97e;
    border: 1px solid #c8a97e;
    color: #fff;
    font-size:16px;
    padding:5px 13px;
    border-radius: 5px;
    font-size:16px;

}
.card-header{
    color:#c8a97e;
    font-family: 'Kalam', cursive;
    font-size:26px;
}
.click:hover{
    color: #c8a97e;
    border: 1px solid #c8a97e;
    background: #fff;
}




 



</style>
@endsection
