@extends('admin.master')

@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form class="form-horizontal" method="post" action="{{route('new_brand')}}">
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
                                    <input type="text" class="form-control" name="brand_name" placeholder="Brand Name">
                                    <span class="text-danger">{{$errors->has('brand_name')?$errors->first('brand_name'):''}}</span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label col-form-label">Brand Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control"  name="brand_description" placeholder="Brand Description"></textarea>
                                    <span class="text-danger">{{$errors->has('brand_description')?$errors->first('brand_description'):''}}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label ">Publication Status</label>
                                <div class="col-sm-9">
                                    <input type="radio" name="publication_status" value="1"> Published
                                    <input type="radio" name="publication_status" value="0"> UnPublished
                                    <br>
                                    <span class="text-danger">{{$errors->has('publication_status')?$errors->first('publication_status'):''}}</span>

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