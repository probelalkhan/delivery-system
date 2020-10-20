<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carrier;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{

    public function index(Request $request){
        $driver = Driver::find($request->driver_id);
        $drivers = Driver::all();
        $carriers = Carrier::all();
        return view('admin.driver',[
            'drivers' => $drivers,
            'carriers' => $carriers,
            'driver'=>$driver
        ]);
    }

    public function saveDriver(Request $request){

        if($request->driver_id == -1)
            $driver = new Driver();
        else
            $driver = Driver::find($request->driver_id);

        $driver->first_name = $request->first_name;
        $driver->last_name = $request->last_name;
        $driver->dob = $request->dob;
        $driver->driving_licence = $request->driving_licence;
        $driver->year_permit = $request->year_permit;
        $driver->experience = $request->experience;
        $driver->no_of_companies = $request->no_of_companies;
        $driver->vehicle_category = $request->vehicle_category;
        $driver->international = $request->international;
        $driver->delivery_mode = $request->delivery_mode;
        $driver->enterprise_category = $request->enterprise_category;
        $driver->commodity_nature = $request->commodity_nature;
        $driver->avg_stay = $request->avg_stay;
        $driver->professional_training = $request->professional_training;
        $driver->carrier_id = $request->carrier_id;
        $driver->save();
        $request->session()->flash('alert-success', 'Driver successful added/updated!');
        return redirect()->back();
    }

    public function allDrivers(){
        $drivers = Driver::all();
        return view('admin.drivers',[
            'drivers' => $drivers
        ]);
    }

    public function deleteDriver(Request $request){
        $driver = Driver::find($request->driver_id);
        $driver->delete();
        return redirect()->back();
    }
}
