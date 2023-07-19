@extends('layouts.app')

<style>
.myForm {
    padding: 16px;
    background-color: #A7D0EA;
    border-radius: 10px;
    height: 100%;
}

.user-image {
    width: 60%;
    height: 60%;
}
</style>
@section('content')
<div class="container">
    <br>
    <h2>Edit Profile</h2>
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success')}}
    </div>
    @endif
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-sm-12 mb-2 d-flex justify-content-center">
            <img src="/web_images/user_profile.png" class="img-fluid user-image" />
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 myForm">
            {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'put']) !!}

            <div class="mb-3">
                {!! Form::label('name', 'Name', ['class' => 'form-label']) !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                {!! Form::label('phone', 'Phone', ['class' => 'form-label']) !!}
                {!! Form::text('phone', null, ['class' => 'form-control', 'required']) !!}
                @error('phone')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                {!! Form::label('address', 'Address', ['class' => 'form-label']) !!}
                {!! Form::text('address', null, ['class' => 'form-control', 'required']) !!}
                @error('address')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                {!! Form::label('password', 'Password', ['class' => 'form-label']) !!}
                {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {!! Form::submit('Update', ['class' => 'btn btn-success form-control']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection