<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index(){
        $clients = Client::all();
        return view('admin.client',[
            'clients' => $clients
        ]);
    }

    public function saveClient(Request $request){
        $client = new Client();
        $client->company_name = $request->company_name;
        $client->ice = $request->ice;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->address = $request->address;
        $client->activities = $request->activities;
        $client->agreement = $request->agreement;
        $client->save();
        return redirect()->back();
    }
}
