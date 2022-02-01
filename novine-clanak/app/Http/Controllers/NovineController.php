<?php

namespace App\Http\Controllers;

use App\Http\Resources\NovineResource;
use App\Models\Novine;
use Illuminate\Http\Request;

class NovineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novine = Novine::all();
        return NovineResource::collection($novine);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Novine  $novine
     * @return \Illuminate\Http\Response
     */
    public function show(Novine $novine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Novine  $novine
     * @return \Illuminate\Http\Response
     */
    public function edit(Novine $novine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Novine  $novine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Novine $novine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Novine  $novine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Novine $novine)
    {
        //
    }
}
