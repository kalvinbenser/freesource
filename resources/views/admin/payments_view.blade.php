@extends('layouts.admin')

@section('styles')

@endsection
@section('content')

  <div class="container-fluid px-4">
                          <h1 class="mt-4">Payments</h1>
                          <ol class="breadcrumb mb-4">
                              <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                              <li class="breadcrumb-item active">Payments</li>
                          </ol>

                          <div class="card mb-4">

                              <div class="card-body">
                                  <table id="datatablesSimple">
                                      <thead>
                                          <tr>
                                            <th>No</th>
                                            <th>date</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Payment Id</th>
                                            <th>Status</th>
                                            <th></th>


                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($payments as $payment)
                                      <tr>
                                        <td>
                                          {{$no++}}
                                        </td>
                                        <td>
                                          {{$payment->created_at}}
                                        </td>

                                        <td>
                                          {{$payment->name}}
                                        </td>
                                        <td>
                                          {{$payment->email}}
                                        </td>
                                        <td>
                                          {{$payment->product_name}}
                                        </td>
                                        <td>
                                         ${{$payment->price}}
                                        </td>
                                        <td>
                                        {{$payment->payment_id}}
                                        </td>
                                        <td>
                                        {{$payment->status}}
                                        </td>
                                        <td>
                                         <a class="btn btn-primary btn-sm" href="/edit_payment/{{$payment->id}}">edit</a>
                                        </td>
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
