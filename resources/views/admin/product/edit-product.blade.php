@extends('admin.master')

@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class=" col-lg-9 offset-1 ">
                <div class="card">

                    <div class="card-body">



                        @if(Session::get('message'))

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <h4 class="text-center text-active">{{Session::get('message')}}</h4>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @else
                        @endif
                        <h4 class="card-title">Add Brand</h4>
                        <form action="{{route('update-product')}}" method="post" enctype="multipart/form-data" name="editProductForm" >
                            @csrf

                            <div class="form-group row">
                                <label class="col-form-label  col-md-2 " >Category Name</label>
                                <div class="col-md-10  ">
                                    <select  name="category_id" class="form-control" >
                                        <option value="">---Select Category Name---</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" >{{$category->category_name}}</option>

                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{$errors->has('category_id')?$errors->first('category_id'):''}}</span>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-form-label  col-md-2 " >Brand Name</label>
                                <div class="col-md-10 ">
                                    <select  name="brand_id" class="form-control" >
                                        <option value="">---Select Brand Name---</option>
                                        @foreach($brands as $brandy)
                                            <option value="{{$brandy->id}}" >{{$brandy->brand_name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{$errors->has('brand_id')?$errors->first('brand_id'):''}}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label  col-md-2 " >Product Name</label>
                                <div class="col-md-10 ">
                                    <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}">
                                    <input type="hidden" class="form-control" name="id" value="{{$product->id}}">
                                    <span class="text-danger">{{$errors->has('product_name')?$errors->first('product_name'):''}}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label  col-md-2 " >Product Price</label>
                                <div class="col-md-10 ">
                                    <input type="text" class="form-control" name="product_price" value="{{$product->product_price}}" >
                                    <span class="text-danger">{{$errors->has('product_price')?$errors->first('product_price'):''}}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label  col-md-2 " >Product Quantity</label>
                                <div class="col-md-10 ">
                                    <input type="text" class="form-control" name="product_quantity" value="{{$product->product_quantity}}">
                                    <span class="text-danger">{{$errors->has('product_quantity')?$errors->first('product_quantity'):''}}</span>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-form-label  col-md-2 " >Product Short Description</label>
                                <div class="col-md-10 ">
                                    <textarea name="sort_desc"  class="form-control"  rows="2">{{$product->sort_desc}}</textarea>
                                    <span class="text-danger">{{$errors->has('sort_desc')?$errors->first('sort_desc'):''}}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label  col-md-2 " >Product Long Description</label>
                                <div class="col-md-10 ">
                                    <textarea name="long_desc" id="summary-ckeditor"  class="form-control"  rows="5">{{$product->long_desc}}</textarea>
                                    <span class="text-danger">{{$errors->has('long_desc')?$errors->first('long_desc'):''}}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label  col-md-2 " >Product Image</label>
                                <div class="col-md-10 ">
                                    <input type="file"  name="product_image" value="">
                                    <img src="{{asset($product->product_image)}}" alt="">

                                    <br>
                                    <span class="text-danger">{{$errors->has('product_image')?$errors->first('product_image'):''}}</span>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label  class="col-md-2">Publication Status</label>
                                <div class=" col-md-10 radio">
                                    <input type="radio" name="publication_status" value="1" {{$product->publication_status==1?'checked':''}}> Published
                                    <input type="radio" name="publication_status" value="0" {{$product->publication_status==0?'checked':''}}> UnPublished
                                    <br>
                                    <span class="text-danger">{{$errors->has('publication_status')?$errors->first('publication_status'):''}}</span>

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
    </div>

    <script>

        document.forms['editProductForm'].elements['category_id'].value = '{{$product->category_id}}';
        document.forms['editProductForm'].elements['brand_id'].value = '{{$product->brand_id}}';

    </script>

@endsection