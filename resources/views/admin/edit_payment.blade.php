@extends('layouts.admin2')

@section('styles')

@endsection
@section('content')

           <div class="container-fluid">
             <h1 class="mt-4">Edit Payment Status</h1>
             <ol class="breadcrumb mb-4">
                 <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/payments_view">payments view</a></li>
                 <li class="breadcrumb-item active">Edit Payment Status</li>
             </ol>
             <div class="row">
               <div class="col-md-12">
                 <div class="card">

                   <div class="card-body">

                     <form action="/update_payment" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$update->id}}">
                       <div class="row mb-3">

                         <div class="col-md-6">
                           <div class="form-group">

                             <div class="form-group">
                               <label class="bmd-label-floating">Name</label>
                               <input type="textbox" value="{{$update->name}}" class="form-control" name="name" readonly>
                             </div>
                           </div>
                         </div>

                         <div class="col-md-6">
                           <div class="form-group">

                             <div class="form-group">
                               <label class="bmd-label-floating">Email</label>
                               <input type="textbox" value="{{$update->email}}" class="form-control" name="email" readonly>
                             </div>
                           </div>
                         </div>
                       </div>

                       <div class="row mb-3">

                         <div class="col-md-6">
                           <div class="form-group">

                             <div class="form-group">
                               <label class="bmd-label-floating">Phone</label>
                               <input type="textbox" value="{{$update->phone}}" class="form-control" name="phone" readonly>
                             </div>
                           </div>
                         </div>

                         <div class="col-md-6 mb-3">
                           <div class="form-group">

                             <div class="form-group">
                               <label class="bmd-label-floating">Amount</label>
                               <input type="textbox" value="{{$update->amount}}" class="form-control" name="amount" readonly>
                             </div>
                           </div>
                         </div>
                       </div>



                       <div class="row mb-3">

                         <div class="col-md-6">
                           <div class="form-group">

                             <div class="form-group">
                               <label class="bmd-label-floating">Payment Id</label>
                               <input type="textbox" value="{{$update->payment_id}}" class="form-control" name="payment_id" readonly>
                             </div>
                           </div>
                         </div>

                         <div class="col-md-6">

                           <div class="form-group">
                        <label class="bmd-label-floating">Status</label>
                            <select name="status" value="{{$update->status}}" class="form-control">
                            <option>-- updaate Status --</option>

                            <option value="onprocess" {{ old('status', $update->status) == 'onprocess' ? 'selected' : '' }}>onprocess</option>
                            <option value="rejected" {{ old('status', $update->status) == 'rejected' ? 'selected' : '' }}>rejected</option>
                            <option value="completed" {{ old('status', $update->status) == 'completed' ? 'selected' : '' }}>completed</option>
                            </select>
                             </div>
                           </div>
                         </div>
                       </div>

                          <div class="text-center mt-3">
                       <button type="submit" class="btn btn-primary pull-right ">update</button>
                     </div>
                       <div class="clearfix"></div>
                     </form>
                   </div>
                 </div>
               </div>
             </div>
           </div>



@endsection

@section('scripts')
  @if(Auth::user()->role == 'user')
  <script>window.location = '{{url('/')}}';</script>
  @endif
@endsection
