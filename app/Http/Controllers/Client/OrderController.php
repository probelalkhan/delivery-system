<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $addresses = Address::all();
        return view('client.order',[
            'addresses'=>$addresses
        ]);
    }

    public function saveOrder(Request $request){
        $order = new Order();
        $order->address_pickup = $request->pickupaddress;
        $order->address_delivery = $request->deliveryaddress;
        $order->title = $request->title;
        $order->nature_container = $request->naturecontainer;
        $order->packaging = $request->packaging;
        $order->weight = $request->weight;
        $order->length = $request->length;
        $order->width = $request->width;
        $order->height = $request->height;
        $order->pickup = $request->pickup;
        $order->delivery = $request->delivery;
        $order->note = $request->note;
        $order->save();
        $request->session()->flash('alert-success', 'Order successful added!');
        return redirect()->back();
    }

    public function allOrders(){
        $orders = Order::all();
        return view('client.orders',[
            'orders'=>$orders
        ]);
    }
}
