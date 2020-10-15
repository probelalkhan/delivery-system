<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carrier;
use Illuminate\Http\Request;

class CarrierController extends Controller
{

    public function index(){
        $carriers = Carrier::all();
        return view('admin.addcarrier');
    }

    public function saveCarrier(Request $request){
        $carrier = new Carrier();
        $carrier->company_name = $request->company_name;
        $carrier->ice = $request->ice;
        $carrier->phone = $request->phone;
        $carrier->address = $request->address;
        $carrier->activities = $request->activities;
        $carrier->agreement = $request->agreement;
        $carrier->framework = $request->framework;
        $carrier->scope = $request->scope;
        $carrier->save();
        $request->session()->flash('alert-success', 'Carrier successful added!');
        return redirect('admin/carrier/add');
    }

    public function allCarriers(){
        $carriers = Carrier::all();
        return view('admin.carriers',[
            'carriers'=> $carriers
        ]);
    }
}
