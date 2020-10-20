<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index(Request $request){
        $client = Client::find($request->client_id);
        return view('admin.client',[
            'client' => $client
        ]);
    }

    public function saveClient(Request $request){

        $request->validate([
            'email' => 'required|unique:clients,email,' . $request->client_id
        ]);

        $client = null;
        $user = null;

        if($request->client_id == -1){
            $client = new Client();
            $user = new User();
        }
        else{
            $client = Client::find($request->client_id);
            $user = User::where('email', $client->email)->first();
        }

        $client->company_name = $request->company_name;
        $client->ice = $request->ice;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->address = $request->address;
        $client->activities = $request->activities;
        $client->agreement = $request->agreement;
        $client->save();

        $user->name = $request->company_name;
        $user->email = $request->email;
        $user->password = bcrypt(config('global.client_default_password'));
        $user->save();

        $request->session()->flash('alert-success', 'Client successful added/updated!');

        return redirect()->back();
    }

    public function allClients(){
        $clients = Client::all();
        return view('admin.clients',[
            'clients' => $clients
        ]);
    }

    public function deleteClient(Request $request){
        $client = Client::find($request->client_id);
        $user = User::where('email', $client->email)->first();
        $user->delete();
        $client->delete();
        return redirect()->back();
    }
}
