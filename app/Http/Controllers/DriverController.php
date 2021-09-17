<?php

namespace App\Http\Controllers;

use App\Http\Resources\DriverResource;
use App\Models\Driver;
use Illuminate\Http\Request;

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

        return response($driver, 200);
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
}
 