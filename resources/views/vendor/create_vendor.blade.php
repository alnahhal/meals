@extends('layouts.app');

@section('content')
<style>
.bgfull {
            background-image: url("/web_images/vendor.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            border-radius: 10px;            
        }

        .myForm {
    padding: 16px;
    background-color: #DBF9FC;
    border-radius: 10px;
}
</style>

<div class="container">
    <h2>Add New Vendor</h2>
    <div class="row">
        <div class="col-lg-5 d-none d-lg-block bgfull me-3">

        </div>


        <div class="col-lg-6 myForm">
        {!! Form::open(['route' => 'vendors.store', 'method' => 'post']) !!}
        <div class="mb-3">
            {!! Form::label('name', 'Name', ['class' => 'form-label']) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        <div class="mb-3">
            {!! Form::label('address', 'Address', ['class' => 'form-label']) !!}
            {!! Form::text('address', null, ['class' => 'form-control']) !!}
        </div>
        @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
{!! Form::label('phone', 'Phone Number', ['class' => 'form-label']) !!}
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">+02</span>
            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
        </div>
        @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        {!! Form::submit('Add New Vendor', ['class' => 'btn btn-primary form-control']) !!}
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection