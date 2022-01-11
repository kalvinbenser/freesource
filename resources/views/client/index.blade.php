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
{{--
      <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('assets/frontend/pic/matlab10.jpg')}}"  class="d-block w-100" style="height:450px" alt="no image">
              <div class="carousel-caption d-none d-md-block">
                <h5>Matlab</h5>
                <p>
                  Powerful machine learning friend expertise in data computation and visual representation
                  Drives innovation and simulate your engineering thoughts
                  Widely used research tool to smooth your analysis procedure, no other program can!	</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('assets/frontend/pic/java5.jpg')}}" class="d-block w-100" style="height:450px" alt="no image">
              <div class="carousel-caption d-none d-md-block">
                <h5>Java</h5>
                <p>Makes it easy to process the data parallelly (Write once and run anywhere)
                  Platform independent
                  Omnipresent
                  Natural and pragmatic approach for software design
                  Makes testing and troubleshooting easier</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('assets/frontend/pic/python2.jpg')}}" class="d-block w-100" style="height:450px" alt="no image">
              <div class="carousel-caption d-none d-md-block">
                <h5>Python</h5>
                <p> Dazzling star in the programming firmament
                  Handles lot of hassles data
                  Offer cross-platform support through library-like tools
                  Script Automation
                  Portable and Extensible for performing cross-platform languages
                  More suitable for Artificial Intelligence</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </button>
        </div>
      </section> --}}

      <section id="home">
<h1>Find All MATLAB Codes</h1>
<h1>You Need Here!</h1>

<p class="mt-5">Powerful machine learning friend expertise in data computation and visual representation Drives innovation and </br> simulate your engineering thoughts Widely used research tool to smooth your analysis procedure, no other program can!</p>
<form action="/search" method="post">
  @csrf
<div class="input-group mt-4">
  <input type="text" class="form-contol search" name="ser" placeholder="search here"/>
  <button type="submit" class="btn sign">search</button>

</div>
</form>
</section>


      <section class="mt-5 ">
        <div class="container ">
          <div class="row">

            <div class="col-md-12">
              <div class=" m-4"><h2>Matlab Codes<h2>


              </div>
              <div class="text-right">
                <h3><a href="/matlab" class="btn btn-custom" >more</a></h3>
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
                  <div class="text-center">
                  <a href="{{url('add_cart')}}/{{$java->id}}"><p><button >Add to Cart</button></p></a>
                  </div>
                  @else
                  <div>
                  <a href="/login"><p><button>Add to Cart</button></p></a>
                  </div>
                  @endif
                  </div>
              </div>
              @endforeach


               </div>

               {{-- {!! $javas->links() !!}  --}}
            </div>


          </div>

        </div>
             <div class="text-center  mb-5">
                <a href="/matlab" class="btn btn-custom" >view more</a>
             </div>
      </section>

      <section class="mt-5">
        <div class="container ">
          <div class="row">

            <div class="col-md-12">
              <div class=" m-4"><h2>Recents<h2>


              </div>
              <div class="text-right">
                <h3><a href="/matlab" class="btn btn-custom" >more</a></h3>
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

               {{-- {!! $javas->links() !!}  --}}
            </div>


          </div>

        </div>


        <div class="text-center  mb-5">
          <a href="/matlab" class="btn btn-custom">view more</a>
       </div>
      </section>

@endsection
@section('scripts')

@endsection
