
@extends('admin.pagina')

@section('contenido')
@section('conte')


<div class="col-lg-6">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Documentos</h6>
              </div>
        <div class="card mb-4 py-3 border-bottom-danger">

                <div class="card-body">


<form action=" {{ url('/documentos') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <fieldset class="form-group">
    <label for="nombre">{{ 'nombre' }}</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
    </fieldset>
    <fieldset class="form-group">
    <label for="descripcion">{{ 'descripcion' }}</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion">
    </fieldset>
    <button type="submit" class="btn btn-primary btn-icon-split" value="Agregar">
            <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                  </span>
                  <span class="text" >Agregar</span>



    </button>
    </form>
</div>
</div>
</div>
@endsection
    @endsection
