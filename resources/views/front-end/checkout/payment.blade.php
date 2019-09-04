@extends('front-end.master')

@section('body')


    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Payment</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="register">
                    <h2> Please Provide Your Payment Info to order</h2>
                    {{Form::open(['route'=>'new-order','method'=>'POST'])}}

                    <div class="form-group">
                        <input type="radio" name="payment_type" value="Cash">Cash on Delivery
                    </div>

                    <div class="form-group">
                        <input type="radio" name="payment_type" value="Paypal">Paypal
                    </div>

                    <div class="form-group">
                        <input type="radio" name="payment_type" value="Bikash">Bikash
                    </div>

                    <div class="form-group">
                        <input type="submit" name="btn" class="btn btn-danger btn-block" value="Place Your Order">
                    </div>

                    {{Form::close()}}
                </div>
            </div>

        </div>
    </div>

@endsection