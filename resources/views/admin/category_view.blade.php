@extends('layouts.admin')

@section('styles')

@endsection
@section('content')



                    <div class="container-fluid px-4">
                         <h1 class="mt-4">Categories</h1>
                         <ol class="breadcrumb mb-4">
                             <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                             <li class="breadcrumb-item active">Categories</li>
                         </ol>


                         <div class="card mb-4">

                           <div class="card-header card-header-primary">

                             @if(session()->has('category'))
                             <p class="alert alert-secondary">{{session()->get('category')}}</p>
                             @endif

                             @error('name')
                             <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="card-body">

                             <form action="/create_category" method="post" enctype="multipart/form-data">
                                    @csrf
                               <div class="row">

                                 <div class="col-md-12">
                                   <div class="form-group">

                                     <div class="form-group">
                                       <label class="bmd-label-floating">Category Name</label>
                                       <input type="textbox" class="form-control  @error('category') is invalid @enderror" name="name" rows="5">
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <button type="submit" class="btn btn-primary pull-right">Add</button>
                               <div class="clearfix"></div>
                             </form>
                           </div>



                         </div>


                         <div class="card mb-4">

                             <div class="card-body">
                                <h4 class="card-title">Category Lists</h4>
                                 <table id="datatablesSimple">
                                     <thead>
                                         <tr>
                                           <th>ID</th>
                                           <th>Category NAME</th>
                                           <th></th>
                                         </tr>
                                     </thead>
                                     <tbody>

                                           @foreach($category as $cat)
                                           <tr>
                                           <td>{{$cat->id}}</td>
                                           <td>{{$cat->name}}</td>
                                           <td><a href="/edit_category_view/{{$cat->id}}"><i class="far fa-edit"></i></a></td>
                                           <td><a href="/delete_category/{{$cat->id}}" ><i class="far fa-trash-alt"></i></a></td>
                                           <tr>
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
