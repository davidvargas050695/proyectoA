<?php

namespace App\Http\Controllers;

use App\Archivos;
use Illuminate\Http\Request;
use App\Tipos;
use Illuminate\Support\Facades\Storage;


class ArchivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {
        //



        $datos['archivos'] = Archivos::paginate(5);

        return view('archivos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipos = Tipos::all();
        return view('archivos.create', compact('tipos'));
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
        $datosArchivo=request()->except('_token');

       if($request->file('archivo'))  {
           $datosArchivo['archivo']=$request->file('archivo')->store('uploads','public');
    }
            Archivos::insert( $datosArchivo);
        return redirect('/archivos');
       return response()->json($datosArchivo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Archivos  $archivos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $archivo = Archivos::findOrfail($id);
        return view('archivos.vista',compact('archivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Archivos  $archivos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $archivo = Archivos::findOrfail($id);
        return view('archivos.edit',compact('archivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Archivos  $archivos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosArchivo=request()->except(['_token','_method']);



        if($request->file('archivo'))  {

            $archivo= Archivos::findOrfail($id);
      Storage::delete('public/'.$archivo->archivo);


            $datosArchivo['archivo']=$request->file('archivo')->store('uploads','public');
     }
        Archivos::where('id','=', $id)->update($datosArchivo);
        $archivo = Archivos::findOrfail($id);
        return view('archivos.edit',compact('archivo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Archivos  $archivos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $archivo = Archivos::findOrfail($id);
        if(Storage::delete('public/'.$archivo->archivo)){

          Archivos::destroy($id);

         }

        return redirect('/archivos');
    }
}
