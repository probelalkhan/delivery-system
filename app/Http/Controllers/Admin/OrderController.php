<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use App\Models\Driver;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Vehicle;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('admin.orders',[
            'orders'=>$orders
        ]);
    }

    public function orderDetail(Request $request){
        $id = $request->order_id;
        $order = Order::find($id);

        $vehicles = Vehicle::all();
        $drivers = Driver::all();
        $deliveries = Delivery::all();

        return view('admin.orderdetail',[
            'order'=>$order,
            'vehicles'=>$vehicles,
            'drivers'=>$drivers,
            'deliveries'=> $deliveries,
            'count'=>0
        ]);
    }

    public function saveDelivery(Request $request){
        $delivery = new Delivery();
        $delivery->order_id = $request->order_id;
        $delivery->driver_id = $request->driverid;
        $delivery->vehicle_id = $request->vehicleid;
        $delivery->save();
        $request->session()->flash('alert-success', 'Delivery successful added!');
        return redirect()->back();
    }

}
