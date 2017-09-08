@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Category

                
                </div>

@if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    <button type="" class="btn btn-success pull-right"><a href='{{ route('category.create') }}'>Add</a></button>

                <table class="table">
                  <thead class="thead-inverse">
                    <tr>
                      <th>#</th>
                      <th>Category Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody> 

                    @foreach( $data as $d)
                    <tr>
                          <th scope="row">{{$d->id}}</th>
                          <td>{{$d->name}}</td>
                          <td>
                              <button type="" class="btn btn-primary">Edit</button>
                              <button type="" class="btn btn-danger">Delete</button>

                          </td>
                    </tr>
                    @endforeach    
                  
                  </tbody>
                </table>

                                      

                </div>
            </div>
        </div>
    </div>
</div>
@endsection