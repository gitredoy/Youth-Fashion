@extends('front-end.master')

@section('body')

    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Shipping</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="register">
                    <h2> Please Provide Your Shipping Info</h2>
                    {{Form::open(['route'=>'new-shipping','method'=>'POST'])}}



                    <div class="form-group">
                        <input type="text" name="full_name" value="{{$customer->first_name.' '.$customer->last_name}}" class="form-control" placeholder="Full Name" >

                    </div>


                    <div class="form-group">
                        <input type="text" name="email_address" class="form-control" placeholder="Email Address" value="{{$customer->email_address}}">

                    </div>

                    <div class="form-group">
                        <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" value="{{$customer->phone_number}}">

                    </div>
                    <div class="form-group">
                        <textarea name="address" class="form-control" placeholder="Address">{{$customer->address}}</textarea>

                    </div>
                    <div class="form-group">
                        <input type="submit" name="btn" class="btn btn-danger btn-block" value="Submit your Shipping Info">
                    </div>


                    {{Form::close()}}
                </div>
            </div>

        </div>
    </div>

@endsection