@extends('layouts.frontend')
@section('styles')

@endsection
@section('content')

      <section>

                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-6 ">
                          <div id="carouselExampleCaptions" class=" carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img src="{{asset('images/products/'.$pro->image)}}" class="d-block w-100" style="height:250px" alt="no image">

                                </div>
                                @foreach($more_img as $more)
                                <div class="carousel-item">
                                  <img src="{{asset('images/moreProduct/'.$more->name)}}" class="d-block w-100" style="height:250px" alt="no image">

                                </div>
                                 @endforeach

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
                        </div>
                        <div class="col-md-6">


                           <div class="card">
                               <div class="card-header">
                                   <h4>{{$pro->title}}</h4>
                               </div>
                               <div class="card-body">
                                   <h5>${{$pro->price}}</h5>
                                   @Auth
                                   <a href="{{url('add_cart')}}/{{$pro->id}}" class="btn btn-dark">Add to Cart</button></a>
                                   @else
                                   <a href="/login" class="btn btn-dark" >Add to Cart</a>
                                   @endif
                               </div>
                           </div>



                      </div>
                    </div>
                </div>



      </section>



      <section>
          <div class="text-center mt-5">
              <h4>Description</h4>
          </div>
          <div class="container mt-5">
              <div class="row ">
                  <div class="col-md-12">

                      <h2 class="title-para">{{$pro->title}}</h2>
                      <h3>Description</h3>
                      <p>{{$pro->description}}</p>
                      <h3>Input</h3>
                      <p>{{$pro->input}}</p>
                      <h3>Output</h3>
                      <p>{{$pro->output}}</p>
                      <h3>Tags</h3>
                      <p>{{$pro->tags}}</p>
                      <h3>Reference</h3>
                      <p>{{$pro->reference}}</p>
                  </div>
              </div>
          </div>
      </section>
@endsection
@section('scripts')

@endsection
