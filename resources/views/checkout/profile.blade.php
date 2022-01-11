@extends('layouts.frontend')
@section('styles')

@endsection
@section('content')
  <ol class="breadcrumb mb-4 p-2 bg-warning">
      <li class="breadcrumb-item"><a href="/">Home</a></li>

      <li class="breadcrumb-item active">Profile</li>
  </ol>




<div class="container">
  <div class="row">
    <div class="col-md-3">


    </div>
    <div class="col-md-6">
      <div class="text-center mt-5">
                   <h2>  Your Profile</h2>
      </div>

      <div class="mt-5">


        <div class="card text-center">
          {{-- <img src="/w3images/team2.jpg" alt="John" style="width:100%"> --}}
   <div class="card-header">
           <h4>Name:   {{$data->name}}</h4>
   </div>
<div class="card-body">
    <p class="title">Email:  kalvinbenser1@gmail.com</p>
</div>



        </div>
      </div>

    </div>
    <div class="col-md-3">


    </div>

  </div>

</div>


@endsection
