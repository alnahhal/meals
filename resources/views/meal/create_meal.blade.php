@extends('layouts.app');

@section('content')
<style>
body,
html {
    height: 100%;
}

* {
    box-sizing: border-box;
}

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
    margin: 20px;
    height: 95%;
    width: 40%;
    padding: 16px;
    background-color: white;
    border-radius: 10px;
}
</style>

<div class="bg-img">
    {!! Form::open(['route' => 'meals.store', 'method' => 'post','enctype' => 'multipart/form-data', 'class' =>
    'myForm']) !!}
    <h4>Add New Meal</h4>

    <div class="mb-1">
        {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="mb-1">
        {!! Form::label('price', 'Price', ['class' => 'form-label']) !!}
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
    </div>
    <div class="mb-1">
        {!! Form::label('preparation_time', 'Preparation Time', ['class' => 'form-label']) !!}
        {!! Form::text('preparation_time', null, ['class' => 'form-control']) !!}
    </div>
    <div class="mb-1">
        {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3']) !!}
    </div>
    <div class="mb-3">
        {!! Form::label('vendor_id', 'Vendor Name', ['class' => 'form-label']) !!}
        <select name="vendor_id" class="form-control" placeholder='plz select vendor...'>
            <option value="">Select Vendor</option>
            @foreach($vendors as $vendor)
            <option value="{{$vendor->id}}">{{$vendor->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-1">
        {!! Form::label('image', 'Meal Image:', ['class' => 'form-label']) !!}
        {!! Form::file('image', null,['class' => 'form-control'], $attributes = []) !!}
    </div>
    {!! Form::submit('Add New Meal', ['class' => 'btn btn-primary form-control btttn']) !!}
    {!! Form::close() !!}
</div>
@endsection