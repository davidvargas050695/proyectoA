<?php

namespace App\Http\Controllers;

use App\Tipos;

use Illuminate\Http\Request;
use App;
use App\Documentos;
use Illuminate\Support\Facades\Storage;

class TiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['tipos'] = Tipos::paginate(5);
        return view('tipos.index',$datos);
    }
  public function getTipos(Request $request, $id){
    if ($request->ajax()) {
        $documentos=Documentos::tipos($id);

        return response()->json($documentos);
    }


  }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       $documentos = Documentos::all();
        return view('tipos.create', compact('documentos'));
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
        $datosTipo=request()->except('_token');
       if($request->file('archivo'))  {
           $datosTipo['archivo']=$request->file('archivo')->store('uploads','public');
    }

            Tipos::insert( $datosTipo);
            return redirect('/tipos');

       return response()->json($datosTipo);

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Tipos  $tipos
     * @return \Illuminate\Http\Response
     */




    public function show($id)
    {
        //

        $tipo = Tipos::findOrfail($id);
        return view('tipos.vista',compact('tipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tipo = Tipos::findOrfail($id);
        return view('tipos.edit',compact('tipo'));
        return redirect('/tipos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosTipo=request()->except(['_token','_method']);



        if($request->file('archivo'))  {

            $tipo = Tipos::findOrfail($id);
      Storage::delete('public/'.$tipo->archivo);


            $datosTipo['archivo']=$request->file('archivo')->store('uploads','public');
     }
        Tipos::where('id','=', $id)->update($datosTipo);
        $tipo = Tipos::findOrfail($id);
        return view('tipos.edit',compact('tipo'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tipo = Tipos::findOrfail($id);
       if(Storage::delete('public/'.$tipo->archivo)){

         Tipos::destroy($id);

        }

        return redirect('/tipos');
    }
}
