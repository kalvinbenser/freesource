@extends('layouts.frontend')

@section('styles')

    <style>

        </style>
@endsection
@section('content')


  <ol class="breadcrumb mb-4 p-2 bg-warning">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/myorder">My orders</a></li>
      <li class="breadcrumb-item active">My order view</li>
  </ol>






         <div class="container con">
           <h1 class="mt-4"> Purchase Detailes</h1>


             <div class="row">

                 <div class="col-md-6">

                     <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{$product->product_name}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Category</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                       {{$product->category}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Title</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{$product->title}}
                      </div>
                    </div>
                    <hr>
                     <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Price</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{$product->price}}
                      </div>
                    </div>


                    <hr>

                  </div>

                 </div>




                 <div class="col-md-6">
                  <div class="card-body">

                     <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Description</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{$product->article}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Product Image</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                          <img src="{{asset('images/products/'.$product->image)}}" height="200px" width="200px">


                      </div>
                    </div>






                  </div>
                 </div>

             </div>




            </div>









            <div class="container-fluid px-4">
              <div class="row">
                <div class="col-md-6">

                                                      <div class="card mb-4">

                                                          <div class="card-body">
                                                              <table id="datatablesSimple" class="table table-responsive ">
                                                                  <thead >
                                                                      <tr>
                                                                        <th>id</th>
                                                                        <th>product id</th>
                                                                        <th>image</th>


                                                                      </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                    @foreach($images as $img)
                                                                      <tbody>
                                                                         <tr>
                                                                           <td>{{$img->id}}</td>
                                                                           <td>{{$img->product_id}}</td>
                                                                           <td><img src="{{asset('images/moreProduct/'.$img->name)}}" height="40px" width="40px"></td>

                                                                            <td><a href="{{url('delete_more_image')}}/{{$img->id}}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a></td>
                                                                         </tr>
                                                                        <tbody>
                                                                    @endforeach
                                                                  </tbody>


                                                              </table>
                                                          </div>
                                                      </div>
                </div>

                <div class="col-md-6">
                  <div class="text-center mt-5">
                      <h4>Description</h4>
                  </div>

                   <div>
                  <h2 class="title-para">{{$product->title}}</h2>
                  <h3>Description</h3>
                  <p>{{$product->description}}</p>
                  <h3>Input</h3>
                  <p>{{$product->input}}</p>
                  <h3>Output</h3>
                  <p>{{$product->output}}</p>
                  <h3>Tags</h3>
                  <p>{{$product->tags}}</p>
                  <h3>Reference</h3>
                  <p>{{$product->reference}}</p>
                </div>
                </div>
              </div>

                                </div>

@endsection

@section('scripts')


@endsection
