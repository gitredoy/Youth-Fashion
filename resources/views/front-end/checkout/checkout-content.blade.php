@extends('front-end.master')

@section('body')


    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Register</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="register">
                    <h2> If you are an Existing member Please Login here</h2>
                    {{Form::open(['route'=>'customer-sign-up','method'=>'POST'])}}


                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control" placeholder="First Name">
                        <span class="text-danger">{{$errors->has('first_name')?$errors->first('first_name'):''}}</span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                        <span class="text-danger">{{$errors->has('last_name')?$errors->first('last_name'):''}}</span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email_address" class="form-control" placeholder="Email Address">
                        <span class="text-danger">{{$errors->has('email_address')?$errors->first('email_address'):''}}</span>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <span class="text-danger">{{$errors->has('password')?$errors->first('password'):''}}</span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone_number" class="form-control" placeholder="Phone Number">
                        <span class="text-danger">{{$errors->has('phone_number')?$errors->first('phone_number'):''}}</span>
                    </div>
                    <div class="form-group">
                        <textarea name="address" class="form-control" placeholder="Address"></textarea>
                        <span class="text-danger">{{$errors->has('address')?$errors->first('address'):''}}</span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btn" class="btn btn-danger btn-block" value="Register">
                    </div>


                    {{Form::close()}}
                </div>
            </div>
            <div class="col-md-5">
                <div class="register">
                    <h2> If you are a new member Please Register here</h2>
                    <h3 class="text-danger">{{Session::get('message')}}</h3>
                    {{Form::open(['route'=>'customer-log-in','method'=>'POST'])}}

                    <div class="form-group">
                        <input type="text" name="email_address" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btn" class="btn btn-danger btn-block" value="Login">
                    </div>


                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>

@endsection
