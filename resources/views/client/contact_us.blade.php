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

      <li class="breadcrumb-item active">Contact Form</li>
  </ol>
        <section class="mt-5 mb-5">

          <div class="container mt-5">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">

                  @if(session()->has('contact'))
                  <div class="alert alert-success">{{session()->get('contact')}}</div>
                  @endif
                      <h2 class="text-center">Contact Form</h2>

                  <form action="/send_contact" method="post">
                    @csrf
                      <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name"  class="form-control @error('name') is invalid @enderror" id="name">
                          @error('name')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                           @enderror
                        </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control @error('email') is invalid @enderror" id="email">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                         @enderror
                      </div>
                      <div class="form-group">
                        <label for="message">Message</label>
                       <textarea name="message" id="message" class="form-control @error('message') is invalid @enderror"></textarea>
                       @error('message')
                       <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="text-center">
                      <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>




        </section>


@endsection
@section('scripts')

@endsection
