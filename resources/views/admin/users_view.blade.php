@extends('layouts.admin')

@section('styles')

@endsection
@section('content')
  <div class="container-fluid px-4">
                          <h1 class="mt-4">Users</h1>
                          <ol class="breadcrumb mb-4">
                              <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                              <li class="breadcrumb-item active">Users</li>
                          </ol>
                      
                          <div class="card mb-4">

                              <div class="card-body">
                                  <table id="datatablesSimple">
                                      <thead>
                                          <tr>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>EMAIL</th>

                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($values as $key)
                                      <tr>
                                        <td>
                                          {{$key->id}}
                                        </td>
                                        <td>
                                          {{$key->name}}
                                        </td>
                                        <td>
                                          {{$key->email}}
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
