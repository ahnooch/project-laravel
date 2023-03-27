<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $service = Service::all();
        return view('service.list' , ['services' => $service]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('service.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $service = new Service;
        $service->désignation = $request->des;
        $service->prix = $request->prix;
        $service->save();
        return redirect('/service');
    }
    public function delete(Request $request)
    {
        //
        $service = Service::find($request->id);
        
        $service->delete();
        return redirect('/service');
    }

    public function edit(Request $request, $id )
    {
        //
        $servic = Service::find($id);
        return view('service.edit' ,  ['service' => $servic]);
    }

    public function update(Request $request, $id)
    {
        $services = Service::find($id);
        $service->name = $request->input('name');
        $service->gender = $request->input('gender');
        
        $input = $request->all();
        $services->update($input);
        return redirect('services');
    }

}
