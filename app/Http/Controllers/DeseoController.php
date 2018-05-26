<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deseo;
use DB;
class DeseoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contador=1;
       
         $idUsuario =auth()->User()->id; //usuario logueado

        $deseos= DB::table('deseos as deseo')     
        ->join('users as usuario','usuario.id','=','deseo.user_id')     
        ->select('usuario.*','deseo.*')     
        ->where('usuario.id','=', $idUsuario)     
        ->get();

        // dd($deseos);
     return view('deseos.index')->with(compact('deseos','contador'));







    
    }


    public function ahorro($id){
     dd($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deseos.create');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
