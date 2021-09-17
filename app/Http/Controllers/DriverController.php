<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\Http\Resources;
use App\Http\Resources\DriverResource;


class DriverController extends Controller
{
    public function index(){
        return Response(Driver::all());
    }
    public function store(Request $request){ 
        //dd($request->input('surname'));
        $driver = new Driver() ; //creer une nouvelle instance 
        $driver->createDriver($request->all()); // la fontion est le model 
        return response()->json($driver,201); //retourner un format json  //status 201 
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
    public function update(Request $request, Driver $driver){
        $driver->updateDriver($request->all());
        return response()->json($driver,200);
    }
    public function destroy(Driver $driver){
        $driver->delete();
        return response()->json('driver deleted',204);
    }
}

