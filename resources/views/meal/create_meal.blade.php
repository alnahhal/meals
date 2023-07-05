@extends('layouts.app')

<style>
.myForm {
    padding: 16px;
    background-color: #A7D0EA;
    border-radius: 10px;
    height: 100%;
}
</style>

@section('content')
<div class="container">
    <br>
    <h2>Add New Meal</h2>
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/web_images/meal.png" class="img-fluid" alt="Meal Logo"/>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            {!! Form::open(['route' => 'meals.store', 'method' => 'post', 'enctype' =>
            'multipart/form-data', 'class' => 'myForm']) !!}

            <div class="mb-3">
                {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="row align-items-center">
                <div class="mb-3 col-md-6 col-sm-12">
                    {!! Form::label('price', 'Price', ['class' => 'form-label']) !!}
                    {!! Form::number('price', null, ['class' => 'form-control', 'min' => '1']) !!}
                    @error('price')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3 col-md-6 col-sm-12">
                    {!! Form::label('preparation_time', 'Preparation Time', ['class' => 'form-label']) !!}
                    {!! Form::number('preparation_time', null, ['class' => 'form-control', 'min' => '30']) !!}
                    @error('preparation_time')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
                {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '2']) !!}
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="row align-items-center">
                <div class="mb-3">
                    <select name="vendor_id" class="form-select" id="vendor_id">
                        <option value="">Select Vendor</option>
                        @foreach($vendors as $vendor)
                        <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                        @endforeach
                    </select>
                    @error('vendor_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    {!! Form::file('image', null,['class' => 'form-control-file']) !!}
                    @error('image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {!! Form::submit('Add New Meal', ['class' => 'btn btn-primary form-control']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection