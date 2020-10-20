<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carrier;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(Request $request){

        $vehicle = Vehicle::find($request->vehicle_id);

        $vehicles = Vehicle::all();
        $carriers = Carrier::all();


        return view('admin.vehicle',[
            'vehicles'=>$vehicles,
            'carriers'=>$carriers,
            'vehicle'=>$vehicle
        ]);
    }

    public function saveVehicle(Request $request){

        $vehicle = null;

        if($request->vehicle_id == -1)
            $vehicle = new Vehicle();
        else
            $vehicle = Vehicle::find($request->vehicle_id);

        $vehicle->category = $request->category;
        $vehicle->carrier_id = $request->carrier_id;
        $vehicle->brand = $request->brand;
        $vehicle->reference = $request->reference;
        $vehicle->date_of_circulation = $request->dateofcirculation;
        $vehicle->save();
        $request->session()->flash('alert-success', 'Vehicle successful added/updated!');
        return redirect()->back();
    }

    public function allVehicles(){
        $vehicles = Vehicle::all();
        return view('admin.vehicles',[
            'vehicles'=>$vehicles
        ]);
    }

    public function deleteVehicle(Request $request){
        $vehicle = Vehicle::find($request->vehicle_id);
        $vehicle->delete();
        return redirect()->back();
    }
}
