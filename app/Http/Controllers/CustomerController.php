<?php

namespace App\Http\Controllers;

use App\Customer;
use Session;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('front-end.login.login');
    }

    public function newCustomerSignUp(Request $request){
        $this -> validate($request,[
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email_address'=> 'required',
            'password'=> 'required',
            'phone_number'=> 'required',
            'address'=> 'required',

        ]);

        $customer = new Customer();
        $customer -> first_name = $request ->first_name ;
        $customer -> last_name = $request -> last_name;
        $customer -> email_address = $request ->email_address ;
        $customer -> password = bcrypt($request ->password) ;
        $customer -> phone_number = $request ->phone_number ;
        $customer -> address = $request ->address ;

        $customer -> save();

        $customerId = $customer->id;
        Session::put('customerId',$customerId);
        Session::put('customerName',$customer->first_name.' '.$customer->last_name);

        $data = $customer -> toArray();

        Mail::send('front-end.mails.welcome-mails',$data,function ($message) use ($data){

            $message -> to($data['email_address']);
            $message->subject('Confirmation Mail - Youth Fashion');
        });

        return redirect('/');

    }

    public function newCustomerLogIn(Request $request){
        $customer = Customer::where('email_address',$request->email_address)->first();

        if(password_verify($request->password,$customer->password)){

            Session::put('customerId',$customer->id);
            Session::put('customerName',$customer->first_name.' '.$customer->last_name);

            return redirect('/');

        }else{

            return redirect('/checkout')->with('message','Invalid Password');
        }
    }
}
