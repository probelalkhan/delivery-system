<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
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
        return redirect()->back();
    }

    public function allAddresses(){
        return view('client.addresses');
    }
}
