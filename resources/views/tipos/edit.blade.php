
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


                    <form action= "{{ url('/tipos/'. $tipo->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <fieldset class="form-group">
                                <label for="documento_id">{{ 'Tipo' }}</label>
                                <select name="documento_id" id="documento_id" class="form-control form-control">
                                            <option value="{{ $tipo->documento_id   }}">{{ $tipo->documento_id}}</option>

                                        </select>
                                </fieldset>
                                  <fieldset class="form-group" >
                                    <label for="nombre">{{'nombre'}}</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $tipo->nombre  }}">
                                    </fieldset>
                                    <fieldset class="form-group" >
                                    <label for="descripcion">{{ 'descripcion'}}</label>
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$tipo->descripcion  }}">
                                    </fieldset>
                                    <fieldset class="form-group">


                                                      <label   for="archivo" >Example file input</label>
                                                      <input type="file" class="form-control-file"    name="archivo" id="archivo" lang="es" value="{{$tipo->archivo }}">


                                            </fieldset>

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
                <iframe src=" {{ asset('storage').'/'.$tipo->archivo}}"  width="100%" height="415">
              </div>

            </div>

          </div>

        </div>

      </div>


@endsection
    @endsection
