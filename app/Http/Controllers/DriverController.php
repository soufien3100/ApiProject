<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\Http\Resources;
use App\Http\Resources\DriverResource;


class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return Response(Driver::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    { 
        //dd($request->input('surname'));
        $driver = new Driver() ; //creer une nouvelle instance 
        $driver->createDriver($request->all()); // la fontion est le model 

        return response()->json($driver,201); //retourner un format json  //status 201 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     * 
     */
    public function show($id) //Driver non typer un model 
    {

         $driver = Driver::find($id);
            if($driver) {
                return new DriverResource($driver);
               // return  Response($driver);
            }
            return response()->json('Driver not found',404); 
            
        //ou $driver = new Driver()
        //$driver->findOrFail('toto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        $driver->updateDriver($request->all());

        return response()->json($driver,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        $driver->delete();
        return response()->json('driver deleted',204);
    }
}
