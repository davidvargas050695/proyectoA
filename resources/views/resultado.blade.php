
@extends('admin.pag')

@section('conteni')
@section('cont')


<div class="container-fluid">

          <br>
          <br>
        <!-- Page Heading -->
        <div class="text-center">
                <img src="/adminlte/img/logoutc.png" alt="" class="img-fluid animated zoomIn" width="500px;">
            </div>
<br>
<br>

        <h1 class="h3 mb-1 text-gray-800" ><fieldset class="form-group">
                <label for="nombre"> <strong>Subproceso:</strong></label>
                <label  id="nombre" name="nombre">{{ $archivo->nombre  }}</label>
                </fieldset> </h1>

        <div class="col-sm-2" style="float: left;">

                <div class="card position-relative" style="border:black 5px solid;">
                        <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Información del Subproceso:<fieldset class="form-group" >
                                        <label for="nombre">{{'Nombre:'}}</label>
                                        <br>
                                        <br>
                                        <label  id="nombre" name="nombre">{{ $archivo->nombre  }}</label>
                                        </fieldset></h6>
                              </div>
                              <div class="card-body">
                                    <form action= "{{ url('/archivos/'. $archivo->id) }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH') }}

                                                  <fieldset class="form-group" >
                                                    <label for="nombre"><strong>{{'Nombre:'}}</strong></label>
                                                    <br>
                                                    <br>
                                                    <label type="text"  id="nombre" name="nombre" >{{ $archivo->nombre  }} </label>
                                                    </fieldset>
                                                    <fieldset class="form-group" >
                                                    <label for="descripcion"><strong>{{ 'Descripción:'}}</strong></label>
                                                    <br>
                                                    <br>
                                                    <label type="text"  id="descripcion" name="descripcion" > {{ $archivo->descripcion }}</label>
                                                    </fieldset>
                                                    <fieldset class="form-group" >
                                                            <label for="dependecia"><strong>{{ 'Dependencia;'}}</strong></label>
                                                            <br>
                                                            <br>
                                                            <label type=" text"  id="dependecia" name="dependecia" >{{ $archivo->dependecia }} </label>
                                                            </fieldset>
                                                            <fieldset class="form-group" >

                                                                    <label for="prodecencia"><strong>{{ 'Procedencia;'}}</strong></label>
                                                            <br>
                                                                    <br>

                                                                    <label type="text" id="prodecencia" name="prodecencia" >{{$archivo->prodecencia }} </label>
                                                                    </fieldset>



                                    </form>
                                </div>


                </div>

              </div>


        <!-- Content Row -->
        <div class="row">

          <!-- Grow In Utility -->
          <div class="col-sm-3">

            <div class="card position-relative"  style="border:black 5px solid;">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Documentos Relacionados</h6>
              </div>
              <div class="card-body">
                    <div class="table-responsive">

                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                            <tr align="center">

                                                    <th scope="col">Nombre</th>


                                                    <th scope="col">Archivo</th>

                                            </tr>
                                    </thead>
                                    <tfoot>
                                    </tfoot>
                                    <tbody>

                                            <tr>





                                              <td align="center">{{ $archivo->nombre }}</td>


                                              <td align="center"><a href="{{ url('/resultado/'.$archivo->id) }}" class="btn btn-danger btn-icon-split">
                                                <span class="icon text-white-50">
                                                  <i class="fas fa-file-pdf"></i>
                                                </span>
                                                <span class="text">PDF
                                                </span>
                                              </a></td>
                                            </tr>

                                        </tr>

                                 </tbody>

                            </table>

                      </div>

                </div>
            </div>

          </div>

          <!-- Fade In Utility -->
          <div class="col-sm-9"  >

            <div class="card position-relative" style="border:maroon 5px solid;">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Documento Actual</h6>

                <iframe src=" {{ asset('storage').'/'.$archivo->archivo}}"  width="100%" height="555">
              </div>

            </div>

          </div>

        </div>

      </div>


@endsection
    @endsection

