<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carrier;
use Illuminate\Http\Request;

class CarrierController extends Controller
{

    public function index(Request $request){
        $carrier = null;
        if($request->carrier_id){
            $carrier = Carrier::find($request->carrier_id);
        }
        return view('admin.addcarrier',[
            'carrier'=>$carrier
        ]);
    }

    public function saveCarrier(Request $request){

        $carrierId = $request->carrier_id;

        $carrier = null;

        if($carrierId == -1)
            $carrier = new Carrier();
        else
            $carrier = Carrier::find($carrierId);

        $carrier->company_name = $request->company_name;
        $carrier->ice = $request->ice;
        $carrier->phone = $request->phone;
        $carrier->address = $request->address;
        $carrier->activities = $request->activities;
        $carrier->agreement = $request->agreement;
        $carrier->framework = $request->framework;
        $carrier->scope = $request->scope;
        $carrier->save();
        $request->session()->flash('alert-success', 'Carrier successfully Added/Updated');
        return redirect()->back();
    }

    public function allCarriers(){
        $carriers = Carrier::all();
        return view('admin.carriers',[
            'carriers'=> $carriers
        ]);
    }

    public function deleteCarrier(Request $request){
        $carrier = Carrier::find($request->carrier_id);
        $carrier->delete();
        return redirect()->back();
    }
}
