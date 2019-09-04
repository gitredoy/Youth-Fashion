@extends('front-end.master')

@section('body')


    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Cart</li>
            </ol>
        </div>
    </div>
    <!---->
    <div class="container">
        <div class="check-out">
            <h2>CART</h2>
            <table >
                <tr>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Update Qty</th>
                    <th>Prices</th>
                    <th>Delivery details</th>
                    <th>Sub total</th>
                    <th>Remove</th>
                </tr>
                @php($sum=0)
                @foreach($cartProduct as $cartProducts)
                <tr>
                    <td class="ring-in"><a href="single.html" class="at-in"><img src="{{asset($cartProducts->options->image)}}" class="img-responsive" alt=""></a>
                        <div class="sed">
                            <h5>{{$cartProducts->name}}</h5>
                        </div>
                        <div class="clearfix"> </div></td>

                    {{Form::open(['route'=>'update-cart','method'=>'POST'])}}

                    <td class="check"><input type="text" name="qty" value="{{$cartProducts->qty}}"></td>

                    <td><input type="hidden" name="rowId" value="{{$cartProducts->rowId}}">
                        <input type="submit" name="btn" class="btn btn-success" value="Update Cart">
                    </td>

                    {{Form::close()}}

                    <td>Tk.{{$cartProducts->price}}</td>
                    <td>FREE SHIPPING</td>
                    <td>Tk.{{$total = $cartProducts->qty*$cartProducts->price}}</td>
                    <td>
                        <a href="{{route('delete-cart-item',['id'=>$cartProducts->rowId])}}" class="btn btn-danger">
                            <i class="">Delete</i>
                        </a>
                    </td>
                </tr>
                    @php($sum = $sum+$total)
               @endforeach

            </table>

            <div class="row">
                <div class="col-md-6">


                </div>

                <div class="col-md-6">
                    <table class="table"  >
                        <tr>
                            <th>Item Total</th>
                            <td>Tk.{{$sum}}</td>
                        </tr>
                        <tr>
                            <th>Delivery charge</th>
                            <td>Tk.{{$del= 0}}</td>
                        </tr>
                        <tr>
                            <th>Grand Total</th>
                            <td>Tk.{{$orderTotal=$sum+$del}}</td>
                            {{Session::put('orderTotal',$orderTotal)}}
                        </tr>
                    </table>
                    <a href="{{route('/')}}" class=" to-buy">Continue Your Shopping</a>

                    @if(Session::get('customerId') && Session::get('shippingId'))
                       <a href="{{route('checkout-payment')}}" class=" to-buy">PROCEED TO BUY</a>
                    @elseif(Session::get('customerId'))
                       <a href="{{route('checkout-shipping')}}" class=" to-buy">PROCEED TO BUY</a>
                    @else
                       <a href="{{route('checkout')}}" class=" to-buy">PROCEED TO BUY</a>
                    @endif
                </div>

            </div>





            <div class="clearfix"> </div>
        </div>
    </div>

@endsection
