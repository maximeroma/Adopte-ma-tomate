<?php

namespace App\Http\Controllers;

use App\Lieu;
use Illuminate\Http\Request;

class LieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lieux = Lieu::all();
        foreach ($lieux as $lieu ) {
           $lieu->jardin;
        }
        return response()->json($lieux);
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

    public function getMapInfo () {
        $lieux = Lieu::all();
        $res = [];
        for ($i=0; $i <count($lieux) ; $i++) { 
           $array_push($res, ['id' => $lieux[$i]->id ]);
        }
        return response()->json( $res );
    }

    public function test() {
        $lieux = Lieu::all();
        for ($i=0; $i < count(); $i++) { 
            # code...
        }
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
     * @param  \App\Lieu  $lieu
     * @return \Illuminate\Http\Response
     */
    public function show(Lieu $lieu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lieu  $lieu
     * @return \Illuminate\Http\Response
     */
    public function edit(Lieu $lieu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lieu  $lieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lieu $lieu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lieu  $lieu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lieu $lieu)
    {
        //
    }
}
