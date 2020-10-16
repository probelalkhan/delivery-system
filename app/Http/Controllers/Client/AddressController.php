<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Client;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('client.address',[
            'clients' => $clients
        ]);
    }

    public function saveAddress(Request $request){
        $address = new Address();
        $address->client_id = $request->clientid;
        $address->title = $request->title;
        $address->address = $request->address;
        $address->city = $request->city;
        $address->postal_code = $request->postalcode;
        $address->latitude = $request->latitude;
        $address->longitude = $request->longitude;
        $address->save();
        $request->session()->flash('alert-success', 'Address successful added!');
        return redirect()->back();
    }

    public function allAddresses(){
        $address = Address::all();
        return view('client.addresses',[
            'addresses'=>$address
        ]);
    }
}
