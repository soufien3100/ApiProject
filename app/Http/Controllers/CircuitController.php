<?php

namespace App\Http\Controllers;

use App\Models\Circuit;
use Illuminate\Http\Request;

class CircuitController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index()
    {
        return Response(Circuit::all(), 200);
    }

    public function store(Request $request)
    { 
        $circuit = new Circuit();
        $circuit->createCircuit($request->all()); 

        return response()->json($circuit,201);
    }


    public function show($id)
    {
        $circuit = Circuit::find($id);

        return Response($circuit, 200);
    }

    public function update(Request $request, Circuit $circuit)
    {
        $circuit->updateCircuit($request->all());

        return response()->json($circuit,200);
    }

    public function destroy(Circuit $circuit)
    {
        $circuit->delete();
        return response()->json('driver deleted',204);
    }
}
