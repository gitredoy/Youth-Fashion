@extends('admin.master')

@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form class="form-horizontal" method="post" action="{{route('update_brand')}}">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Add Brand</h4>

                            @if(Session::get('message'))

                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <h4 class="text-center text-active">{{Session::get('message')}}</h4>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @else
                            @endif


                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label col-form-label">Brand Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="brand_name" value="{{$brand->brand_name}}" placeholder="Brand Name">
                                    <input type="hidden" class="form-control" name="id" value="{{$brand->id}}" placeholder="Brand Name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label col-form-label">Brand Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control"  name="brand_description"  placeholder="Brand Description">{{$brand->brand_description}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label ">Publication Status</label>
                                <div class="col-sm-9">
                                    <input type="radio" name="publication_status" value="1" {{$brand->publication_status==1?'checked':''}}> Published
                                    <input type="radio" name="publication_status" value="0"{{$brand->publication_status==0?'checked':''}}> UnPublished
                                </div>
                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection