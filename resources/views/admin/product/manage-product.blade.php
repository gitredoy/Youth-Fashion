@extends('admin.master')

@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Basic Datatable</h5>
                        @if(Session::get('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <h4 class="text-center">{{Session::get('message')}}</h4>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @else
                        @endif

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>SI No.</th>
                                    <th>Category Name</th>
                                    <th>Brand Name</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product Quantity</th>
                                    <th>Product Image</th>
                                    <th>Publication Status</th>
                                    <th>Product Action</th>

                                </tr>
                                </thead>
                                <tbody class="text-center">
                                @php($i=1)
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$product->category_name }}</td>
                                    <td>{{$product-> brand_name}}</td>
                                    <td>{{$product-> product_name}}</td>
                                    <td>{{$product->product_price }}</td>
                                    <td>{{$product->product_quantity }}</td>
                                    <td><img src="{{asset($product->product_image)}}" alt="" ></td>
                                    <td>{{$product->publication_status ==1?'Published':'UnPublised' }}</td>
                                    <td>
                                        @if($product->publication_status == 1)
                                            <a href="" class="btn btn-primary"><span><i class="fa fa-arrow-up"></i></span></a>
                                        @else
                                            <a href="" class="btn btn-warning"><span><i class="fa fa-arrow-down"></i></span></a>
                                        @endif

                                        <a href="{{route('edit-product',['id'=>$product->id])}}" class="btn btn-success mt-3 mb-3"><span><i class="fa fa-edit"></i></span></a>
                                            <br>
                                        <a href="" class="btn btn-danger"><span><i class="fa fa-trash"></i></span></a>
                                    </td>



                                </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>SI No.</th>
                                    <th>Category Name</th>
                                    <th>Brand Name</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product Quantity</th>
                                    <th>Product Image</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>

                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection