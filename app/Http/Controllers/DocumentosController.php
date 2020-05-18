<?php

namespace App\Http\Controllers;

use App\Documentos;
use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['documentos'] = documentos::paginate(5);
        return view('documentos.index',$datos);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documentos.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosDocumento=request()->except('_token');
         documentos::insert( $datosDocumento);
         return redirect('/documentos');
        return response()->json($datosDocumento);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function show(Documentos $documentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $documento = Documentos::findOrfail($id);


        return view('documentos.edit',compact('documento'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosDocumento=request()->except(['_token','_method']);
        Documentos::where('id','=', $id)->update($datosDocumento);
        $documento = Documentos::findOrfail($id);
        return view('documentos.edit',compact('documento'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        documentos::destroy($id);

        return redirect('/documentos');
    }
}
