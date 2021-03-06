<?php

namespace App\Http\Controllers;

use App\Models\Constructor;
use Illuminate\Http\Request;

class ConstructorController extends Controller
{
    public function index()
    {
        return Response(Constructor::paginate(50), 200);
    }

    public function store(Request $request)
    { 
        $constructor = new Constructor();
        $constructor->createConstructor($request->all()); 

        return response()->json($constructor,201);
    }


    public function show($id)
    {
        $constructor = Constructor::find($id);
        if ($constructor) {
            return response($constructor);
        }
        
        return response()->json('Constructor not found', '404');
    }

    public function update(Request $request, Constructor $constructor)
    {
        $constructor->updateConstructor($request->all());

        return response()->json($constructor,200);
    }

    public function destroy(Constructor $constructor)
    {
        $constructor->delete();
        return response()->json('driver deleted',204);
    }
}
