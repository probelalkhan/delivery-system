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
        $vehicle->brand = $request->brand;
        $vehicle->reference = $request->reference;
        $vehicle->date_of_circulation = $request->dateofcirculation;
        $vehicle->save();
        $request->session()->flash('alert-success', 'Vehicle successful added!');
        return redirect('admin/vehicle/add');
    }

    public function allVehicles(){
        $vehicles = Vehicle::all();
        return view('admin.vehicles',[
            'vehicles'=>$vehicles
        ]);
    }
}
