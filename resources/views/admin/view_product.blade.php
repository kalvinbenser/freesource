@extends('layouts.admin2')

@section('styles')

    <style>

        </style>
@endsection
@section('content')









         <div class="container con">
           <h1 class="mt-4"> Product Detailes</h1>
           <ol class="breadcrumb mb-4">
               <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/products_view">Products</a></li>
               <li class="breadcrumb-item active">Product details</li>
           </ol>


             <div class="row">

                 <div class="col-md-6">

                     <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        {{$product->name}}
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


           <div>  <h4>Upload New Images</h4></div>
            <div class="form mt-3 mb-3 text-center">

              <form action="{{url("image-upload")}}" method="post" enctype="multipart/form-data">
                @csrf
                <label>Upload Image</label>
              <input type="hidden" name="id" value="{{$product->id}}">
              <input type="file" name="image">
            <input type="submit" class="btn btn-primary">

            </div>






            <div class="container-fluid px-4">

                                    <div class="card mb-4">

                                        <div class="card-body">
                                            <table id="datatablesSimple">
                                                <thead>
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

@endsection

@section('scripts')

  @if(Auth::user()->role == 'user')
  <script>window.location = '{{url('/')}}';</script>
  @endif
@endsection
