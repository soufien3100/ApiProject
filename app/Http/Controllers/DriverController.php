<?php

namespace App\Http\Controllers;

use App\Http\Resources\DriverResource;
use App\Models\Driver;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\Http\Resources;
use App\Http\Resources\DriverResource;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

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

    public function show($id)
    {
        $driver = Driver::find($id);
        if ($driver) {
            return response($driver);
        }
        
        return response()->json('Driver not found', '404');
    }

    public function update(Request $request, Driver $driver)
    {
        $driver->updateDriver($request->all());
        return response()->json($driver,200);
    }

    public function destroy(Driver $driver)
    {
        $driver->delete();
        return response()->json('Driver deleted,204');
    }

    public function search($forename) {
        return Driver::where('forename', 'LIKE', '%' .$forename.'%')->get();
    }
}