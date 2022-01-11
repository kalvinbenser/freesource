@extends('layouts.admin2')

@section('styles')

@endsection
@section('content')

           <div class="container-fluid">
             <h1 class="mt-4">Edit Category</h1>
             <ol class="breadcrumb mb-4">
                 <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/category_view">Categories</a></li>
                 <li class="breadcrumb-item active">Edit Category</li>
             </ol>
             <div class="row">
               <div class="col-md-12">
                 <div class="card">


                   <div class="card-body">

                     <form action="/update_category" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$update->id}}">
                       <div class="row">

                         <div class="col-md-12">
                           <div class="form-group">

                             <div class="form-group">
                               <label class="bmd-label-floating">Category Name</label>
                               <input type="textbox" value="{{$update->name}}" class="form-control" name="name">
                             </div>
                           </div>
                         </div>
                       </div>
                       <button type="submit" class="btn btn-primary pull-right">update</button>
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
