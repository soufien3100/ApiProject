<?php

namespace App\Http\Controllers;

use App\Http\Resources\ConstructorResource;
use App\Models\Constructor;
use Illuminate\Http\Request;

class ConstructorController extends Controller
{
    public function index()
    {
        return Response(Constructor::all());
    }

  
    public function store(Request $request)
    {
        $constructor = new Constructor();
        $constructor->createDriver($request->all());

        return response()->json($constructor, 201);
    }

    
    public function show($id)
    {
        $constructor = Constructor::find($id);
        if($constructor){
            return new ConstructorResource($constructor);
        }
        return response()->json('constructor not found' , 404);
        
    }

    
    public function update(Request $request, Constructor $constructor)
    {
        $constructor->updateDriver($request->all());
        return response()->json($constructor,200);
    }

    
    public function destroy(Constructor $constructor)
    {
        $constructor->delete();
        return response()->json('Constructor deleted,204');
    }
}
