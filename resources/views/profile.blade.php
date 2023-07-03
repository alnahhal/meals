@extends('layouts.app')

@section('content')


        <section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="photos/ph.png"
                class="rounded-circle img-fluid" style="width: 100px;" />
            </div>
            <h2 class="mb-2">{{$user->name}}</h2>
            <br>
          <p><b>Email : </b> {{$user->email}}</p>
          <p><b>Phone : </b> {{$user->phone}}</p>
          <p><b>Address : </b> {{$user->address}}</p>
          
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


@endsection 