@extends('layouts.app')

<style>
/* body,
html {
    height: 100%;
} */

/* * {
    box-sizing: border-box;
} */

h4 {
    text-align: center;
}

.bg-img {
    background-image: url("/web_images/meals.png");
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

.myForm {
    position: absolute;
    right: 50px;
    margin-top: 15px;
    /* height: 95%; */
    width: 40%;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
}
</style>

@section('content')
<div class="bg-img">
    <div class="container">

        {!! Form::open(['route' => 'meals.store', 'method' => 'post','enctype' => 'multipart/form-data','files' => true,
        'class' =>
        'myForm']) !!}
        <h4>Add New Meal</h4>

        <div class="mb-2">
            {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            @error('title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="row">
            <div class="mb-2 col-md-6">
                {!! Form::label('price', 'Price', ['class' => 'form-label']) !!}
                {!! Form::number('price', null, ['class' => 'form-control', 'min' => '1']) !!}
                @error('price')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-2 col-md-6">
                {!! Form::label('preparation_time', 'Preparation Time', ['class' => 'form-label']) !!}
                {!! Form::number('preparation_time', null, ['class' => 'form-control']) !!}
                @error('preparation_time')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="mb-2">
            {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3']) !!}
            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="row">
            <div class="mb-2 col-md-6">
                {!! Form::label('vendor_id', 'Vendor Name', ['class' => 'form-label']) !!}
                <select name="vendor_id" class="form-control">
                    <option value="">Select Vendor</option>
                    @foreach($vendors as $vendor)
                    <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                    @endforeach
                </select>
                @error('vendor_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2 col-md-6">
                {!! Form::label('image', 'Image:', ['class' => 'form-label']) !!}
                {!! Form::file('image', null,['class' => 'form-control'], $attributes = []) !!}
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        {!! Form::submit('Add New Meal', ['class' => 'btn btn-primary form-control btttn']) !!}
        {!! Form::close() !!}

    </div>
</div>
@endsection