@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Category - Create

                
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form method="POST" action="{{ route('category.store') }}">
                       
                        {{ csrf_field() }}
                    
                    <div class="form-group">
                      <label for="categoryName">Name</label>
                      <input type="text" class="form-control" id="categoryName" placeholder="Category Name" name="categoryName">
                      <small id="categoryHelp" class="form-text text-muted">Please insert the category name.</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="cancel" class="btn btn-warning">Cancel</button>

                    </form>

                                      

                </div>
            </div>
        </div>
    </div>
</div>
@endsection