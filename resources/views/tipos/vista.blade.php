
@extends('admin.pagina')

@section('contenido')
@section('conte')


<div class="container-fluid">
        <a href="tipos/create" class="btn btn-primary btn-icon-split" style="float: left">
            <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
            </span>
            <span class="text">Nuevo</span>
          </a>
          <br>
          <br>
        <!-- Page Heading -->
        <h1 class="h3 mb-1 text-gray-800" >Proceso Seleccionado </h1>


        <!-- Content Row -->
        <div class="row">

          <!-- Grow In Utility -->
          <div class="col-lg-6">

            <div class="card position-relative">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Información del Proceso Seleccionado</h6>
              </div>
              <div class="card-body">


                    <form action= "{{ url('/tipos/'.$tipo->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <fieldset class="form-group">
                                <label for="documento_id">{{ 'Tipo:' }}</label>
                            <br>
                            <br>

                                <label name="documento_id" id="documento_id">
                                            {{ $tipo->documento_id}} </label>


                                </fieldset>
                                  <fieldset class="form-group" >
                                    <label for="nombre">{{'Nombre:'}}</label>
                                    <br>
                                    <br>
                                    <label  id="nombre" name="nombre">{{ $tipo->nombre  }}</label>
                                    </fieldset>
                                    <fieldset class="form-group" >
                                    <label for="descripcion">{{ 'Descripcion:'}}</label>
                                    <br>
                                    <br>
                                    <label  id="descripcion" name="descripcion">{{ $tipo->descripcion  }}</label>
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

                <iframe src=" {{ asset('storage').'/'.$tipo->archivo}}"  width="100%" height="455">
              </div>

            </div>

          </div>

        </div>

      </div>


@endsection
    @endsection
