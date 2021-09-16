<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResultResource;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    
    public function index()
    {
        return Response(Result::all());
    }

    public function store(Request $request)
    {
        $result = new Result();
        $result->createResult($request->all());

        return response()->json($result, 201);
    }

    public function show($id)
    {
        $result = Result::find($id);
        if($result){
            return new ResultResource($result);
        }
        return response()->json('Result not found' , 404);
        
    }
}
