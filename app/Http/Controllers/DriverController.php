<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\Http\Resources;
use App\Http\Resources\DriverResource;


class DriverController extends Controller
{
    public function index()
    {
        return Response(Driver::paginate(50));
    }

    public function store(Request $request)
    { 
        $driver = new Driver();
        $driver->createDriver($request->all()); 

        return response()->json($driver,201);
    }
    public function show($id) {
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

    public function destroy(Driver $driver)
    {
        $driver->delete();
        return response()->json('driver deleted',204);
    }
}

