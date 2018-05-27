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


    public function cuota($id)
    {
      
        $deseo = Deseo::find($id);
        
        return view('deseos.cuota')->with(compact('deseo'));
    }


    public function ahorro(Request $request,$id)
    {

        $deseo = new Deseo();
        $deseo->cuota=$request->input('cuota');
       dd($deseo);

        // $deseos=DB::table('deseos')
        // ->where('id', $id)
        // ->update(['ahorro' => ]);

      
        
 
         return redirect('/deseos');
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
       
        // dd( $request->all());
        $deseo = new Deseo();
        $deseo->nombre=$request->input('nombre');
        $deseo->precio=$request->input('precio');
        $deseo->descripcion=$request->input('descripcion');
        $deseo->cuota=$request->input('cuota');
        $deseo->ahorro=$request->input('ahorro');
        $deseo->user_id=auth()->User()->id;
        $deseo->save();

        return redirect('/deseos');
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
      
        $deseo = Deseo::find($id);
        return view('deseos.edit')->with(compact('deseo'));
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
        $deseo = Deseo::find($id);
        $deseo->nombre=$request->input('nombre');
        $deseo->precio=$request->input('precio');
        $deseo->descripcion=$request->input('descripcion');
        $deseo->cuota=$request->input('cuota');
        $deseo->ahorro=$request->input('ahorro');
        $deseo->user_id=auth()->User()->id;
        $deseo->save();

        return redirect('/deseos');
    }
    public function destroy (Request $request, $id)
    {
        $deseo = Deseo::find($id);
        $deseo->delete();
        
        return back();
    }
}
