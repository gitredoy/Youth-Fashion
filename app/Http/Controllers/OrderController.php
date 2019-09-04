<?php

namespace App\Http\Controllers;

use App\Customer;
use App\order;
use App\orderDetails;
use App\payment;
use App\Shipping;
use Illuminate\Http\Request;

use DB;

class OrderController extends Controller
{
    public function manageOrder(){

        $orders = DB::table('orders')
            ->join('customers','orders.customer_id','=','customers.id')
            ->join('payments','orders.id','=','payments.order_id')
            ->select('orders.*','customers.first_name','customers.last_name','payments.payment_type','payments.payment_status')
            ->get();


        return view('admin.order.manage-order',['orders'=>$orders]);
    }

    public function viewOrderDetails($id){
        $order = order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = payment::where ('order_id',$order->id)->first();
        $orderDetails = orderDetails::where('order_id',$order->id)->get();

        return view('admin.order.view-order',[
            'customer'=>$customer,
            'shipping'=>$shipping,
            'payment'=>$payment,
            'orderDetails'=>$orderDetails
        ]);
    }

//    public function viewOrderInvoice($id){
//
//        $order = order::find($id);
//        $customer = Customer::find($order->customer_id);
//        $shipping = Shipping::find($order->shipping_id);
//        $payment = payment::where ('order_id',$order->id)->first();
//        $orderDetails = orderDetails::where('order_id',$order->id)->get();
//
//        return view('admin.order.view-invoice',[
//            'order'=>$order,
//            'customer'=>$customer,
//            'shipping'=>$shipping,
//            'payment'=>$payment,
//            'orderDetails'=>$orderDetails
//        ]);
//    }


public function viewOrderDelete($id){

    return view('admin.order.orderdelete');

//        $order = order::find($id);
//    $customer = Customer::find($order->customer_id);
//    $shipping = Shipping::find($order->shipping_id);
//    $payment = payment::where ('order_id',$order->id)->first();
//    $orderDetails = orderDetails::where('order_id',$order->id)->get();
//
//
//        return view('admin.order.orderdelete',[
//            'order'=> $order,
//            'customer'=>$customer,
//            'shipping'=> $shipping,
//            'payment' => $payment,
//            'orderDetails'=> $orderDetails
//        ]);
}



    public function viewOrderInvoice()
    {
        return view('admin.order.view-invoice');
    }

    public function getInvoiceData(Request $request)
    {
        $data['order']          = $order = order::find($request->id);
        $data['customer']       = Customer::find($order->customer_id);
        $data['shipping']       = Shipping::find($order->shipping_id);
        $data['payment']        = payment::where ('order_id', $order->id)->first();
        $data['orderDetails']   = orderDetails::where('order_id', $order->id)->get();

        return response(json_encode($data));
    }

    public function getInvoiceDataUpdate(Request $request)
    {
        $data['order'] = $order = order::find($request->id);
    $data['customer'] = Customer::find($order->customer_id);
    $data['shipping'] = Shipping::find($order->shipping_id);
    $data['payment'] = payment::where ('order_id',$order->id)->first();
    $data['orderDetails'] = orderDetails::where('order_id',$order->id)->get();

        return response(json_encode($data));
    }
}
