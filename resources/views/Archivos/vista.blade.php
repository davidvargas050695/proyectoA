

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
                                <label for="tipo_id">{{ 'Tipo de subproceso:' }}</label>
                                <br>
                                <label name="tipo_id" id="tipo_id" >
                                          {{ $archivo->tipo_id}} </label>

                                </fieldset>
                                  <fieldset class="form-group" >
                                    <label for="nombre">{{'Nombre:'}}</label>
                                    <br>

                                    <label type="text" id="nombre" name="nombre" >{{ $archivo->nombre  }}</label>
                                    </fieldset>
                                    <fieldset class="form-group" >
                                    <label for="descripcion">{{ 'Descripcion:'}}</label>
                                    <br>
                                    <label type="text"  id="descripcion" name="descripcion" >{{ $archivo->descripcion }}</label>
                                    </fieldset>
                                    <fieldset class="form-group" >
                                            <label for="dependecia">{{ 'Dependencia:'}}</label>
                                            <br>
                                            <label type=" text" id="dependecia" name="dependecia" >{{$archivo->dependecia }}</label>
                                            </fieldset>



                                            <fieldset class="form-group" >
                                                    <label for="prodecencia">{{ 'Procedencia:'}}</label>
                                                    <br>
                                                    <label type="text"  id="prodecencia" name="prodecencia" >{{$archivo->prodecencia }}</label>
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



