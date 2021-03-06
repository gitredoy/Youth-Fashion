
@extends('admin.master')

@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class="  col-lg-12">
                <div class="card">
                    <form class="form-horizontal" action="{{route('update-category')}}" method="post" >
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Add Category</h4>
                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>

                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label col-form-label">Category Name</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="{{$categories->category_name}}" name="category_name" placeholder="Category Name">
                                    <input type="hidden" class="form-control" value="{{$categories->id}}" name="id" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label col-form-label">Category Description</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" name="category_description">{{$categories->category_description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label ">Publication Status</label>
                                <div class="col-sm-7">
                                    <input type="radio" name="publication_status" value="1" {{$categories->publication_status==1?'checked':''}} > Published
                                    <input type="radio" name="publication_status" value="0" {{$categories->publication_status==0?'checked':''}} > Unpublished
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
