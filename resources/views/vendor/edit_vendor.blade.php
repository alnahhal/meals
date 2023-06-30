@extends('layouts.app')

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

@section('content')
<div class="container">
    <br>
    <h2>Update Vendor</h2>
    <div class="row">
        <div class="col-lg-5 bgfull me-3">
        </div>

        <div class="col-lg-6 myForm">
            {!! Form::model($vendor, ['route' => ['vendors.update', $vendor], 'method' => 'put']) !!}
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
                <span class="input-group-text">+02</span>
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

            {!! Form::submit('Update', ['class' => 'btn btn-success form-control']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection