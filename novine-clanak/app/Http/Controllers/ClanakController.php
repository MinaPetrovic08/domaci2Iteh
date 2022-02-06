<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClanakResource;
use App\Models\Clanak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ClanakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clanaks = Clanak::all();
        return ClanakResource::collection($clanaks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'naslov' => 'required|string|max:255',
            'opis' => 'required|string|max:225',
            'novine_id' => 'required'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $clanak = Clanak::create([
            'naslov' => $request->naslov,
            'opis' => $request->opis,
            'novine_id' => $request->novine_id,
            'user_id' => Auth::user()->id,
        ]);

        return response()->json(['Clanak je uspesno kreiran.', new ClanakResource($clanak)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clanak  $clanak
     * @return \Illuminate\Http\Response
     */
    public function show(Clanak $clanak)
    {
        return new ClanakResource($clanak);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clanak  $clanak
     * @return \Illuminate\Http\Response
     */
    public function edit(Clanak $clanak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clanak  $clanak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clanak $clanak)
    {
        $validator = Validator::make($request->all(), [
            'naslov' => 'required|string|max:255',
            'opis' => 'required|string|max:225',
            'novine_id' => 'required'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $clanak->naslov = $request->naslov;
        $clanak->opis = $request->opis;
        $clanak->category_id = $request->category_id;

        $clanak->save();

        return response()->json(['Clanak je uspesno azuriran.', new ClanakResource($clanak)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clanak  $clanak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clanak $clanak)
    {
        $clanak->delete();

        return response()->json('Clanak je uspesno obrisan!');
    }
}
