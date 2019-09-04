<?php

namespace App\Http\Controllers;

use App\order;
use App\orderDetails;
use App\payment;
use App\Shipping;

use Cart;
use Illuminate\Http\Request;
use App\Customer;
use Session;
use Mail;

class CheckoutController extends Controller
{
    public function index(){
        return view ('front-end.checkout.checkout-content');
    }

    public function customerSignUp(Request $request){
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

        return redirect('/checkout/shipping');
    }

    public function confirmMail(){
        return view('front-end.mails.confirm-mail');
    }

    public function shippingInfo(){
        $customer = Customer::find(Session::get('customerId'));
        return view('front-end.checkout.shipping-form',['customer'=>$customer]);
    }

    public function saveShippingInfo(Request $request){
        $shipping = new Shipping();
        $shipping->full_name = $request->full_name;
        $shipping->email_address = $request->email_address;
        $shipping->phone_number = $request->phone_number;
        $shipping->address = $request->address;
        $shipping->save();

        Session::put('shippingId',$shipping->id);
        return redirect('/checkout/payment');
    }

    public function paymentForm(){
        return view('front-end.checkout.payment');
    }

    public function newOrder(Request $request){
        $paymentType = $request->payment_type;
        if($paymentType == 'Cash'){
            $order = new order();
            $order -> customer_id = Session::get('customerId');
            $order -> shipping_id = Session::get('shippingId');
            $order -> order_total = Session::get('orderTotal');
            $order ->save();

            $payment = new payment();
            $payment -> order_id = $order->id;
            $payment -> payment_type = $paymentType;
            $payment ->save();

            $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct){
                $orderDetails = new orderDetails();
                $orderDetails -> order_id = $order->id;
                $orderDetails -> product_id = $cartProduct ->id;
                $orderDetails -> product_name = $cartProduct ->name;
                $orderDetails -> product_price = $cartProduct ->price;
                $orderDetails -> product_quantity = $cartProduct ->qty;
                $orderDetails->save();
            }

            Cart::destroy();

            return redirect('/complete/order');


        }elseif ($paymentType == 'Paypal'){

        }elseif ($paymentType == 'Bikash'){

        }

    }

    public function saveOrder(){
        return view('front-end.checkout.complete-order');
    }

    public function customerLoginCheck(Request $request){
        $customer = Customer::where('email_address',$request->email_address)->first();

        if(password_verify($request->password,$customer->password)){

            Session::put('customerId',$customer->id);
            Session::put('customerName',$customer->first_name.' '.$customer->last_name);

            return redirect('/checkout/shipping');

        }else{

            return redirect('/checkout')->with('message','Invalid Password');
        }


    }

    public function customerLogout(){

        Session::forget('customerId');
        Session::forget('customerName');

        return redirect('/');

    }
}
