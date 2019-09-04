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
                                <h4 class="text-center text-active ">{{Session::get('message')}}</h4>
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
                                    <th>SI Number</th>
                                    <th>Brand Name</th>
                                    <th>Brand Description</th>
                                    <th>Brand Publication Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                               <tbody>

                               @php($i=1)
                               @foreach($brand as $brandy)
                               <tr>
                                   <td>{{$i++}}</td>
                                   <td>{{$brandy->brand_name}}</td>
                                   <td>{{$brandy->brand_description}}</td>
                                   <td>{{$brandy->publication_status==1?'Published':'Unpublished'}}</td>
                                   <td>
                                       @if($brandy->publication_status==1)
                                       <a href="{{route('unpublished_brand',['id'=>$brandy->id])}}" class="btn btn-primary"><span><i class="fa fa-arrow-up"></i></span></a>
                                       @else
                                           <a href="{{route('published_brand',['id'=>$brandy->id])}}" class="btn btn-danger"><span><i class="fa fa-arrow-down"></i></span></a>
                                       @endif

                                       <a href="{{route('edit_brand',['id'=>$brandy->id])}}" class="btn btn-secondary"><span><i class="fa fa-edit"></i></span></a>
                                       <a href="{{route('delete_brand',['id'=>$brandy->id])}}" class="btn btn-warning"><span><i class="fa fa-trash"></i></span></a>
                                   </td>

                               </tr>
                               @endforeach
                               </tbody>
                                <tfoot>
                                <tr>
                                    <th>SI Number</th>
                                    <th>Brand Name</th>
                                    <th>Brand Description</th>
                                    <th>Brand Publication Status</th>
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