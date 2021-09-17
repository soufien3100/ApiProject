<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Illuminate\Http\Request;
use App\Http\Resources\RaceResource;



class RaceController extends Controller
{
    public function index(){
        return Response(Race::all());
    }
    
    public function store(Request $request){
        $race = new Race() ; //creer une nouvelle instance 
        $race->createRace($request->all()); // la fontion est le model 
        return response()->json($race,201);
    }

    public function show($id){
        $race = Race::find($id);
        if($race) {
            return response($race);
            //return new RaceResource($race);
        }
        return response()->json('Racer not found',404); 
    }

    public function update(Request $request, Race $race){
        $race->updateRace($request->all());
        return response()->json($race,200);
    }

    public function destroy(Race $race){
        $race->delete();
        return response()->json('race deleted',204);
    }
}
