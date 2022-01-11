@extends('layouts.admin')

@section('styles')

@endsection
@section('content')
  <div class="container-fluid px-4">
                          <h1 class="mt-4">Products</h1>
                          <ol class="breadcrumb mb-4">
                              <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                              <li class="breadcrumb-item active">Products</li>
                          </ol>
                          <a class="btn btn-primary btn-sm " href="/add_product_view">Add</a>
                          <div class="card mb-4">

                              <div class="card-body">
                                  <table id="datatablesSimple">
                                      <thead>
                                          <tr>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>CATEGORY</th>
                                            <th>TITLE</th>
                                            <th>PRICE</th>
                                            <th>IMAGE</th>
                                            <th>Description</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>

                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                          <td>{{$product->id}}</td>
                                            <td>{{$product->product_name}}</td>
                                              <td>{{$product->category}}</td>
                                                <td>{{$product->title}}</td>
                                                  <td>{{$product->price}}</td>
                                                <td><img src="{{asset('images/products/'.$product->image)}}" height="100px" width="100px" alt="kalvin"></td>
                                                        <td>{{$product->article}}</td>
                                                        <td><a href="/view_product/{{$product->id}}" ><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                                        <td><a href="/edit_product_view/{{$product->id}}"><i class="fas fa-edit"></i></a></td>
                                                        <td><a href="/delete_product/{{$product->id}}" ><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                        </tr>
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
