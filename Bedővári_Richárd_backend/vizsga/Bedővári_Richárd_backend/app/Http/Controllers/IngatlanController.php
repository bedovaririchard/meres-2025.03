<?php

namespace App\Http\Controllers;

use App\Models\Ingatlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IngatlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ingatlan::with('kategoria')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'kategoria' => 'required',
            'tehermentes' => 'required',
            'ar' => 'required'
        ]);

        if ($validator->fails()){
            return response()->json(['message' => 'Hiányos adatok'],400);
        }

        $ingatlan = Ingatlan::create($request->all());
        return response()->json(['id' => $ingatlan->id],201);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingatlan = Ingatlan::where('id', '=', $id);

        if ($ingatlan->exists())
        {
            $ingatlan->delete();
            return response('',204);
        }
        return response('Az ingatlan nem létezik.',404);
    }
}
