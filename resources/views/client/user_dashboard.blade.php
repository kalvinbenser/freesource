@extends('layouts.frontend')
@section('styles')
  <style>
    .bg-tomoto{
        background-color:crimson;

    }
    .navbar-tomoto{
      color:rgb(245, 239, 239);
    }


    .card {
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
max-width: 300px;
margin: auto;
text-align: center;
font-family: arial;
}

.price {
color: grey;
font-size: 22px;
}

.card button {
border: none;
outline: 0;
padding: 12px;
color: white;
background-color: #000;
text-align: center;
cursor: pointer;
width: 100%;
font-size: 18px;
}

.card button:hover {
opacity: 0.7;
}


.terms{

              text-align:center;

          }
          .para{
              letter-spacing: 2px;
              text-indent: 50px;
              font-family: Arial, Helvetica, sans-serif;
              margin-top:50px;
              font-weight:5px;
          }

  </style>

@endsection
@section('content')
  <ol class="breadcrumb mb-4 p-2 bg-warning">
      <li class="breadcrumb-item"><a href="/">Home</a></li>

      <li class="breadcrumb-item active">Dashboard</li>
  </ol>

           <div class="text-center mt-5 mb-5">
               <h1>User Profile</h1>

                  <h4>Name:   {{$user_data->name}}</h4></br>
        <h4>Email:   {{$user_data->email}}</h4>
  </div>

@endsection
@section('scripts')

@endsection
