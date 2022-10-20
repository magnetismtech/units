<?php

namespace Magnetism\Units\Http;

use Magnetism\Units\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnitController extends Controller
{

    public function index()
    {
        try {
            $Units = Unit::latest()->get();
            return response()->json([
                'value' => $Units,
                'message' => 'Units retrieved Successfully.'
            ], 200);
        }
        catch (\Exception $e)
        {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {
        try{
            $Unit = Unit::create($request->all());
            return response()->json([
                'value' => $Unit,
                'message' => 'Unit added Successfully.'
            ], 201);
        }catch (\Exception $e)
        {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }


    public function show($unit)
    {
        try {
            $unit = Unit::find($unit);
            return response()->json([
                'value' => $unit,
                'message' => 'Unit retrieved successfully.'
            ], 200);
        } catch (\Exception $e)
        {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }


    public function update(Request $request, $unit)
    {
        try{
            $unit = Unit::find($unit);
            if($unit){
                $unit->update($request->all());
            }
            return response()->json([
                'value' => $unit,
                'message' => 'Unit updated Successfully.'
            ], 201);
        }
        catch (\Exception $e)
        {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function destroy($unit)
    {
        try {
            $unit = Unit::find($unit);
            if($unit){
                $unit->delete();
            }
            return response()->json([
                'value' => '',
                'message' => 'Unit deleted Successfully.'
            ], 204);
        }
        catch (\Exception $e)
        {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }
}
