@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <h4>List of Vendors ' Meals</h4>
    <table class="table table-striped table-bordred table-hover align-middle"
        style="text-align:center; border-radius:10px; overflow: hidden;">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Meal Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Preparation Time</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vendors as $vendor)
            <!-- <p>{{$vendor->meal}}</p> /////<==>//// array of array -->
            @if(count($vendor->meal) > 0)
            @foreach($vendor->meal as $meal)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td><img width="100px" height="100px" src="{{asset('/storage/'.$meal->image)}}"
                        style="border-radius:10px;" /></td>
                <td>{{$meal->title}}</td>
                <td>{{$meal->description}}</td>
                <td>{{$meal->price}}</td>
                <td>{{$meal->preparation_time}}</td>
                <td>
                    <a href="{{ route('meals.edit', $meal->id) }}" class="btn btn-info">
                        Edit
                    </a>
                </td>
                <td>
                    <form action="{{ route('meals.destroy', $meal) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger" style="margin-top:5px;">
                    </form>
                </td>
            </tr>
            @endforeach
            @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection