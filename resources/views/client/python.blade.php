@extends('layouts.frontend')
@section('styles')
  <style>

    .freesource{
      padding:15px;
    }

      .card {
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
max-width: 350px;
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
  </style>

@endsection
@section('content')
  <ol class="breadcrumb mb-4 p-2 bg-warning">
      <li class="breadcrumb-item"><a href="/">Home</a></li>

      <li class="breadcrumb-item active">Python</li>
  </ol>
      <section class="mt-5">
        <div class="container ">
          <div class="row">

            <div class="col-md-12">
              <div class=" m-4 text-center"><h2>Python Codes<h2>


              </div>
                       <div class="row mb-5">
              <!-- product -->

              @foreach($javas as $java)

              <div class="col-md-4 ">
                <div class="card">
                  <a href="{{url('/product')}}/{{$java->id}}">
                  <img src="{{asset(asset('images/products/'.$java->image))}}" alt="No image" height="350px" width="350px">
                  </a><a href="{{url('/product')}}/{{$java->id}}">
                  <p style="height:50px">{{$java->product_name}}</p>
                  </a>
                  <p class="price">${{$java->price}}</p>
                  @Auth
                  <a href="{{url('add_cart')}}/{{$java->id}}"><p><button >Add to Cart</button></p></a>
                  @else
                  <a href="/login"><p><button>Add to Cart</button></p></a>
                  @endif
                  </div>
              </div>
              @endforeach


               </div>

               {!! $javas->links() !!}
            </div>


          </div>

        </div>

      </section>



@endsection
@section('scripts')

@endsection
