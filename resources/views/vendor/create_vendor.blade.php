@extends('layouts.app')

<style>
.myForm {
    padding: 16px;
    background-color:  #A7D0EA;
    border-radius: 10px;
    height: 100%;
}
</style>

@section('content')
<div class="container">
    <br>
    <h2>Add New Vendor</h2>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/web_images/vendor.png" class="img-fluid" alt="Vendor Logo"/>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 myForm">
            {!! Form::open(['route' => 'vendors.store', 'method' => 'post']) !!}
            
            <div class="mb-3">
                {!! Form::label('name', 'Name', ['class' => 'form-label']) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                {!! Form::label('address', 'Address', ['class' => 'form-label']) !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
                @error('address')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {!! Form::label('phone', 'Phone Number', ['class' => 'form-label']) !!}
            <div class="input-group mb-3">
                <span class="input-group-text">+20</span>
                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
            </div>
            @error('phone')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
                {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3']) !!}
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {!! Form::submit('Add New Vendor', ['class' => 'btn btn-primary form-control']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection