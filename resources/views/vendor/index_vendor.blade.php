@extends('layouts.app')

@section('content')
<div class="container">
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success')}}
    </div>
    @endif
    <br>
    <h4 style="display:inline;"> List of All Vendors</h4>
    <a href="{{route('vendors.create')}}" class="btn btn-success" style="float: right;">Add New Vendor</a>
    <br>
    <br>
    <table class="table table-striped table-bordred table-hover align-middle"
        style="text-align:center; border-radius:10px; overflow: hidden;">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Description</th>
                <th scope="col">Show Meals</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vendors as $vendor)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{$vendor->name}}</td>
                <td>{{$vendor->address}}</td>
                <td>{{$vendor->phone}}</td>
                <td>{{$vendor->description}}</td>
                <td>
                    <a href="{{ route('vendors.show', $vendor->id) }}" class="btn btn-warning">
                        Show Meals
                    </a>
                </td>
                <td>
                    <a href="{{ route('vendors.edit', $vendor->id) }}" class="btn btn-info">
                        Edit
                    </a>
                </td>
                <td>
                    <form action="{{ route('vendors.destroy', $vendor) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger" style="margin-top:13px;">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection