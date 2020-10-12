<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carrier;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(){
        $vehicles = Vehicle::all();
        $carriers = Carrier::all();

        return view('admin.vehicle',[
            'vehicles'=>$vehicles,
            'carriers'=>$carriers
        ]);
    }

    public function saveVehicle(Request $request){
        $vehicle = new Vehicle();
        $vehicle->category = $request->category;
        $vehicle->carrier_id = $request->carrier_id;
        $vehicle->save();
        return redirect('admin/vehicle/add');
    }
}