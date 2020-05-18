

@extends('admin.pagina')

@section('contenido')
@section('conte')


<div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-1 text-gray-800">Tipos</h1>


        <!-- Content Row -->
        <div class="row">

          <!-- Grow In Utility -->
          <div class="col-lg-6">

            <div class="card position-relative">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ingresar información</h6>
              </div>
              <div class="card-body">



                    <form action= "{{ url('/archivos/'. $archivo->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <fieldset class="form-group">
                                <label for="tipo_id">{{ 'Archivo' }}</label>
                                <select name="tipo_id" id="tipo_id" class="form-control form-control">
                                            <option value="{{ $archivo->tipo_id   }}">{{ $archivo->tipo_id}}</option>

                                        </select>
                                </fieldset>
                                  <fieldset class="form-group" >
                                    <label for="nombre">{{'nombre'}}</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $archivo->nombre  }}">
                                    </fieldset>
                                    <fieldset class="form-group" >
                                    <label for="descripcion">{{ 'descripcion'}}</label>
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$archivo->descripcion  }}">
                                    </fieldset>
                                    <fieldset class="form-group" >
                                            <label for="dependecia">{{ 'dependecia'}}</label>
                                            <input type=" text" class="form-control" id="dependecia" name="dependecia" value="{{$archivo->dependecia  }}">
                                            </fieldset>



                                            <fieldset class="form-group" >
                                                    <label for="prodecencia">{{ 'prodecencia'}}</label>
                                                    <input type="text" class="form-control" id="prodecencia" name="prodecencia" value="{{$archivo->prodecencia }}">
                                                    </fieldset>
                                    <fieldset class="form-group">


                                            <label   for="archivo" >Example file input</label>
                                            <input type="file" class="form-control-file"    name="archivo" id="archivo" lang="es" value="{{$archivo->archivo }}">


                                  </fieldset>
                                    <fieldset class="form-group" >
                                    <button type="submit" class="btn btn-info btn-icon-split" value="Editar"><span class="icon text-white-50">
                                            <i class="fas fa-check-circle" ></i>
                                          </span>
                                          <span class="text">Editar</span></button>
                                        </fieldset>

                    </form>


                </div>
            </div>

          </div>

          <!-- Fade In Utility -->
          <div class="col-lg-6">

            <div class="card position-relative">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Documento Actual</h6>
              </div>
              <iframe src=" {{ asset('storage').'/'.$archivo->archivo}}"  width="100%" height="415">
            </div>

          </div>

        </div>

      </div>


@endsection
    @endsection








