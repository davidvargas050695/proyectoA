<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Documentos;
use App\Tipos;
use App\Archivos;
use Symfony\Component\HttpFoundation\Request;

Route::get('/', function (Request $request) {
    $nombre = $request->get('nombre');
    $descripcion = $request->get('descripcion');
    $dependecia = $request->get('dependecia');
    $prodecencia = $request->get('prodecencia');
    $archivos = Archivos::orderBy('id', 'DESC')
     ->nombre($nombre)
     ->descripcion($descripcion)
     ->dependecia($dependecia)
     ->prodecencia($prodecencia)
    ->paginate(5);

    return view('welcome',compact('archivos'));
});



Route::resource('documentos','DocumentosController');
Route::resource('tipos','TiposController');
Route::resource('archivos','ArchivosController');
Route::resource('resultado','ResultadoController');
Route::get('tipos/{id}', 'TiposController@getTipos');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
