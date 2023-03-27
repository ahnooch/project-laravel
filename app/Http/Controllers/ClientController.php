<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        //
        $client = Client::all();
        return view('client.list' , ['clients' => $client]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('client.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $client = new Client;
        $client->raisonSociale = $request->raisonSociale;
        $client->tel = $request->tel;
        $client->email = $request->email;
        $client->Adresse = $request->Adresse;
        $client->save();
        return redirect('/client');
    }
    public function delete(Request $request)
    {
        //
        $client = Client::find($request->id);
        
        $client->delete();
        return redirect('/client');
    }

    public function edit(Request $request, $id )
    {
        //
        $client = Client::find($id);
        return view('client.edit' ,  ['client' => $client]);
    }

    public function update(Request $request , $id)
    {
        $clients = Client::find($id);
        $input = $request->all();
        $clients->update($input);
        return redirect('clients');
    }
}
