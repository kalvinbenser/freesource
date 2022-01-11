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

      <li class="breadcrumb-item active">Myorders</li>
  </ol>
  <section>
      <div class="container my-5">

          <div class="row">

            <div class="col-md-2">

            </div>
            <div class="col-md-8">
              <h1>My Orders</h1>



              <table class="table">
                  <thead>
                    <tr>
                      <th >No</th>
                      <th >Name</th>
                       <th>Amount</th>
                        <th>Status</th>
                        <th>Purchase Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($product as $value)
                  <tr>
                    <th >{{$no++}}</th>
                    <th >{{$value->product_name}}</th>
                    <th >${{$value->price}}</th>
                    <th>{{$value->status}}</th>
                    @if($value->status=='onprocess')
                      <td>Review process ongoing...Your Purchase code will be send your email with in 24hours</td>
                    @elseif($value->status=='rejected')
                      <td>your order is rejected. refund your amount with in 24 hours</td>
                    @else
                      <td>Your Purchase Code  is sent to your email  Successfully</td>

                    @endif


                      <td><a class="btn btn-info btn-sm"s href="/myorder_view/{{$value->prod_id}}">View</a></td>
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
