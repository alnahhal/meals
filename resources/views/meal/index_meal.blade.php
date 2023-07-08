@extends('layouts.app')


<style>
h5 {
  font-size:22px;
  text-align:center;
  font-weight:bold;
}

.card-item{
  font-size:16px;
  color:red;
  font-weight:bold;
}

.price {
  font-size:25px;
}
</style>
@section('content')
<br>
<div class="container">
@if (session()->has('success'))
<div class="alert alert-success">
    {{ session('success')}}
</div>
@endif
<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach($meals as $meal)
  <div class="col">
    <div class="card h-100">
      <img height="250px" width="100px" src="{{ asset('/storage/'.$meal->image) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$meal->title}}</h5>
        <p class="card-text"><span class="card-item">Price:</span> <span class="price">{{$meal->price}}</span> <b>ج.م</b></p>
        <p class="card-text"><span class="card-item">Description:</span> <br>{{$meal->description}}</p>
        <p><span class="card-item">Preparation Time:</span> {{$meal->preparation_time}} <b>Minutes</b></p>
      </div>
      <div class="card-footer">
      <a href="{{ route('meals.edit', $meal->id) }}" class="btn btn-info form-control">Edit</a>
      <br>
      <br>
                <form action="{{ route('meals.destroy', $meal) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger form-control">
                </form>
      </div>
    </div>
    
  </div>
  @endforeach
</div>
@endsection