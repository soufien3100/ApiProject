<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Illuminate\Http\Request;

class RaceController extends Controller
{
    public function index()
    {
        return Response(Race::paginate(50), 200);
    }

    public function store(Request $request)
    {
        $race = new Race();
        $race->createRace($request->all());
        return response()->json($race,201);
    }

    public function show($id)
    {
        $race = Race::find($id);
        if($race) {
            return response($race);
        }
        return response()->json('Race not found',404); 
    }

    public function update(Request $request, Race $race)
    {
        $race->updateRace($request->all());

        return response()->json($race,200);
    }

    public function destroy(Race $race)
    {
        $race->delete();
        return response()->json('race deleted',204);
    }
}
