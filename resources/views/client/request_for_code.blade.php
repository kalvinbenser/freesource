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


        <section class="mt-5 mb-5">


  <div class="section">

    <div class="terms">
        <h1>Request for Code</h1>
    </div>

    <div class="container para ">
        <div class="row">
      I will code, simulate, and make any GUI or App for any system using Matlab,
      I can Code and Simulate any System you have about:
      <ul>
    <li>Linear and Nonlinear Systems</li>
    <li>Control Systems</li>
    <li>Aerial Systems (Airplanes, Helicopters, Rockets, Wings, Profiles)</li>
    <li>Strap-Down Systems and Guidance Systems</li>
    <li>Image Processing</li>
    <li>Finding the Best and Shortest Road</li>
    <li>General Dynamic Systems</li>
    <li>Simple Programing and Solving Mathematical Formulas</li></ul>
      And any other project you may have …
      Please: Feel free to contact us before requesting this service.

    </div>
  </div>
  </div>




        </section>

@endsection
@section('scripts')

@endsection
