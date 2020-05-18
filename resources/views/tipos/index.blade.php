@extends('admin.pagina')

@section('contenido')
@section('conte')

<div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Archivos</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
                <a href="tipos/create" class="btn btn-primary btn-icon-split" style="float: left">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Nuevo</span>
                  </a>
                  <br>
                  <br>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                            <tr align="center">
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Archivo</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Eliminar</th>
                            </tr>
                    </thead>
                    <tfoot>
                    </tfoot>
                    <tbody>

                            @foreach ($tipos as $tipo )
                            <tr>
                              <th align="center" scope="row">{{ $loop->iteration }}</th>



                              <td align="center">{{ $tipo->nombre }}</td>
                              <td align="center">{{ $tipo->documento_id}}</td>

                              <td align="center">{{ $tipo->descripcion}}</td>

                              <td align="center"><a href="{{ url('/tipos/'.$tipo->id) }}" class="btn btn-danger btn-icon-split">
                                <span class="icon text-white-50">
                                  <i class="fas fa-file-pdf"></i>
                                </span>
                                <span class="text">PDF
                                </span>
                              </a></td>
                              <td align="center" > <a href="{{ url('/tipos/'.$tipo->id.'/edit') }}" class="btn btn-info btn-icon-split">
                                    <span class="icon text-white-50">
                                      <i class="fas fa-tools"></i>
                                    </span>
                                    <span class="text">Editar</span>
                                  </a></td>
                              <td align="center"> <form action="{{ url('/tipos/'.$tipo->id) }}" method="POST">

        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-success btn-icon-split" onclick="return confirm('Seguro Desea Borrar');" ><span class="icon text-white-50">
                <i class="fas fa-trash"></i>
              </span>
              <span class="text">Eliminar</span></button>

                              </form></td>
                            </tr>
                            @endforeach
                        </tr>

                 </tbody>
            </table>
          </div>
        </div>
      </div>

@endsection
    @endsection
