@extends('layouts.admin')

@section('styles')

@endsection
@section('content')


  <div class="container-fluid px-4">
                          <h1 class="mt-4">Add Product</h1>
                          <ol class="breadcrumb mb-4">
                              <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                              <li class="breadcrumb-item active">Add Product</li>
                          </ol>
                          <div class="card mb-4">

                            <div class="card-header card-header-primary">


                            </div>

                            <div class="card-body">

                              <form action="/create_product" method="post" enctype="multipart/form-data">
                                     @csrf
                                <div class="row">

                                  @error('cat')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                   @enderror

                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Product Name</label>
                                      <input type="text" name="name" class="form-control @error('name') is invalid @enderror">
                                      @error('name')
                                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                       @enderror
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Category</label>

                                      <!-- <input type="text" name="category" class="form-control"> -->
                                      <select class="form-control @error('category') is invalid @enderror" name="cat">

                                          <option >---Select Category---</option>
                                        @foreach($category as $cat)

                                         <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                      </select>

                                    </div>

                                  </div>
                                </div>
                                <div class="row">

                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Title</label>
                                      <input type="text" name="title" class="form-control @error('title') is invalid @enderror">
                                      @error('title')
                                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                       @enderror
                                    </div>

                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Price</label>
                                      <input type="text" name="price" class="form-control @error('price') is invalid @enderror">
                                      @error('price')
                                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                       @enderror
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">

                                      <label>Image</label>
                                      <input type="file" name="image" class="form-control @error('image') is invalid @enderror" id = "demo">
                                      @error('image')
                                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                       @enderror

                                   <!-- <div class="form-group">

                                      <div class="form-group">
                                        <label class="bmd-label-floating">Article</label>
                                        <textarea class="form-control" rows="5"></textarea>
                                      </div>
                                    </div> -->
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">

                                      <div class="form-group">
                                        <label class="bmd-label-floating">Description</label>
                                        <input type="textbox" class="form-control @error('des') is invalid @enderror" name="des" rows="5">
                                        @error('des')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                         @enderror
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">

                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">input</label>
                                      <input type="text" name="input" class="form-control @error('input') is invalid @enderror">
                                      @error('input')
                                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                       @enderror
                                    </div>

                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">output</label>
                                      <input type="text" name="output" class="form-control @error('output') is invalid @enderror">
                                      @error('output')
                                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                       @enderror
                                    </div>
                                  </div>
                                </div>
                                <div class="row">

                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">tags</label>
                                      <input type="text" name="tags" class="form-control @error('tags') is invalid @enderror">
                                      @error('tags')
                                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                       @enderror
                                    </div>

                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">reference</label>
                                      <input type="text" name="ref" class="form-control @error('ref') is invalid @enderror">
                                      @error('ref')
                                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                       @enderror
                                    </div>
                                  </div>
                                </div>



                                <button type="submit" class="btn btn-primary pull-right">Add</button>
                                <div class="clearfix"></div>
                              </form>
                            </div>
                          </div>
                      </div>





@endsection

@section('scripts')
  @if(Auth::user()->role == 'user')
  <script>window.location = '{{url('/')}}';</script>
  @endif
@endsection
