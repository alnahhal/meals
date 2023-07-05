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
    <h2>Update Meal</h2>
    <div class="row align-items-center">

        <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="/web_images/meal.png" class="img-fluid" alt="Meal Logo"/>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            {!! Form::model($meal, ['route' => ['meals.update', $meal], 'method' => 'put','enctype' =>
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
                    {!! Form::label('vendor_id', 'Vendor ID', ['class' => 'form-label']) !!}
                    {!! Form::text('vendor_id', null,['class' => 'form-control']) !!}
                    @error('vendor_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    {!! Form::file('image', null,['class' => 'form-control-file']) !!}
                    @error('image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <img style="border-radius:10px; margin-top:5px;" width="90px" height="70px"
                        src="{{asset('/storage/'.$meal->image)}}" />
                </div>
            </div>

            {!! Form::submit('Update Meal', ['class' => 'btn btn-success form-control']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection