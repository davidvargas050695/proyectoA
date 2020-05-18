
@extends('admin.pagina')

@section('contenido')
@section('conte')


<div class="col-lg-6">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tipos</h6>
              </div>
        <div class="card mb-4 py-3 border-bottom-info">

                <div class="card-body">


<form action=" {{ url('/archivos') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <fieldset class="form-group">
            <label for="tipo_id">{{ 'Tipo' }}</label>
            <select name="tipo_id" id="tipo_id" class="form-control form-control">
                @foreach ($tipos as $tipo )


                    <option value="{{ $tipo['id'] }}">{{ $tipo->nombre}}</option>


                  @endforeach
                </select>
            </fieldset>
    <fieldset class="form-group">
    <label for="nombre">{{ 'nombre' }}</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
    </fieldset>
    <fieldset class="form-group">
    <label for="descripcion">{{ 'descripcion' }}</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion">
    </fieldset>
    <fieldset class="form-group">
            <label for="dependecia">{{ 'dependecia' }}</label>
            <input type="text" class="form-control" id="dependecia" name="dependecia">
            </fieldset>
            <fieldset class="form-group">
                    <label for="prodecencia">{{ 'prodecencia' }}</label>
                    <input type="text" class="form-control" id="prodecencia" name="prodecencia">
                    </fieldset>

    <fieldset class="form-group">


            <div class="form-group">
              <label   for="archivo" >Example file input</label>
              <input type="file" class="form-control-file"    name="archivo" id="archivo" lang="es">
            </div>



    </fieldset>
    <button type="submit" class="btn btn-info btn-icon-split" value="Agregar">
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
