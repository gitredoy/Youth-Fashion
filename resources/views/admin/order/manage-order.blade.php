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
                                    <th>Customer Name</th>
                                    <th>Order Total</th>
                                    <th>Order Date</th>
                                    <th>Order Status</th>
                                    <th>Payment Type</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>


                                </tr>
                                </thead>
                                <tbody class="text-center">
                                @php($i=1)
                                @foreach($orders as $order)

                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$order->first_name.' '.$order->last_name}}</td>
                                    <td>{{$order->order_total}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td>{{$order->order_status}}</td>
                                    <td>{{$order->payment_type}}</td>
                                    <td>{{$order->payment_status}}</td>
                                    <td>
                                        <a href="{{route('order-details',['id'=>$order->id])}}" class="btn btn-primary" title="View Order Details">
                                            <span><i class="fa fa-search-plus"></i></span>
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            <span><i class="fa fa-edit"></i></span>
                                        </a>

                                        <a href="{{route('view-order-delete',['id'=>$order->id])}}" class="btn btn-danger">
                                            <span><i class="fa fa-trash"></i></span>
                                        </a>

                                        <a href="{{route('view-order-invoice',['id'=>$order->id])}}" class="btn btn-dark">
                                            <span><i class="fa fa-download"></i></span>
                                        </a>

                                        @if($order->order_status == 'Pending')
                                        <a href="" class="btn btn-secondary mt-0" title="Order Status Pending">
                                            <span><i class="fa fa-thumbs-down "></i></span>
                                        </a><br>
                                        @else

                                        <a href="" class="btn btn-success mt-0" title="Order Status Confirm">
                                            <span><i class="fa fa-thumbs-up "></i></span>
                                        </a><br>
                                        @endif

                                    </td>
                                </tr>

                                    @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>SI No.</th>
                                    <th>Customer Name</th>
                                    <th>Order Total</th>
                                    <th>Order Date</th>
                                    <th>Order Status</th>
                                    <th>Payment Type</th>
                                    <th>Payment Status</th>
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