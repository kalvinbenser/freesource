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

      <li class="breadcrumb-item active">Cart</li>
  </ol>
  <section>
      <div class="container my-5">

          <div class="row">

            <div class="col-md-2">

            </div>
            <div class="col-md-8">
              <h1>cart</h1>



              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Item Name</th>
                      <th scope="col">Image</th>
                      <th scope="col">Price</th>
                      <th scope="col">cheackout</th>
                      <th scope="col">remove</th>

                    </tr>
                  </thead>
                  <tbody>
                      @foreach($carts as $cart)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$cart->name}}</td>
                      <td><img src="{{asset('images/products/'.$cart->image)}}" height="100px" width="100px" /></td>
                      <td><span class="text-primary">$</span>{{$cart->price}}</td>
                      <!-- <td><a  href="{{url('/single_razorpay')}}/{{$cart->id}}"><button class="btn btn-primary" style="background:blue">checkout</button></a></td> -->
                      <td><a  href="{{url('/razorpay')}}/{{$cart->id}}"><button class="btn btn-info btn-sm">checkout</button></a></td>
                                           {{-- <td><a  href="{{url('/checkout_view')}}/{{$cart->id}}"><button class="btn btn-info btn-sm">checkout</button></a></td> --}}
                      <td><a  href="{{url('/delete_cart')}}/{{$cart->id}}"><button  class="btn  btn-danger btn-sm" >remove</button></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>




             {{-- <div class="container check">

                  <small>{{$no_cart}} Item(s) selected</small>
                  <h5>SUBTOTAL: ${{$add_price}}</h5>


                  <a href="/multiple_razorpay"><button class="btn btn-primary" >checkout</button></a>


            </div> --}}
            </div>
              <div class="col-md-2">
                </div>



  </div>
    </div>
    </section>




@endsection

@section('scripts')

@endsection
