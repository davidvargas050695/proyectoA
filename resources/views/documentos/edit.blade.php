
@extends('admin.pagina')

@section('contenido')
@section('conte')
<div class="col-lg-6">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Documentos</h6>
              </div>
        <div class="card mb-4 py-3 border-bottom-info">

                <div class="card-body">


                    <form action= "{{ url('/documentos/'. $documento->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                                    <label for="nombre">{{'nombre'}}</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $documento->nombre  }}">
                                    </fieldset>

                                    <label for="descripcion">{{ 'descripcion'}}</label>
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$documento->descripcion  }}">
                                    </fieldset>
   <br>
                                    <button type="submit" class="btn btn-info btn-icon-split" value="Editar"><span class="icon text-white-50">
                                            <i class="fas fa-check-circle" ></i>
                                          </span>
                                          <span class="text">Editar</span></button>
                    </form>

                </div>
            </div>
            </div>
@endsection
    @endsection
