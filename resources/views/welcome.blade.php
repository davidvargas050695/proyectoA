<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Repositorio-UTC</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Custom fonts for this template-->
        <link href="/adminlte/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="/adminlte/css/sb-admin-2.min.css" rel="stylesheet">
        <STyle>

     html{
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
        background: #FFFFFF !important;
        }

        .searchbar{
        margin-bottom: auto;
        margin-top: auto;
        height: 60px;
        background-color: #353b48;
        border-radius: 30px;
        padding: 10px;
        }

        .search_input{
        color: white;
        border: 0;
        outline: 0;
        background: none;
        width: 0;
        caret-color:transparent;
        line-height: 40px;
        transition: width 0.4s linear;
        }

        .searchbar:hover > .search_input{
        padding: 0 10px;
        width: 450px;
        caret-color:red;
        transition: width 0.4s linear;
        }

        .searchbar:hover > .search_icon{
        background: white;
        color: #e74c3c;
        }

        .search_icon{
        height: 40px;
        width: 40px;
        float: right;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        color:white;
        }


  </STyle>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body >
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/') }}" class="btn btn-outline-dark btn-icon-split">

                            <i class="fas fa-dark-circle"></i>

                          <span class="text">Inicio</span>
                        </a>
                    @else
                    <a href="{{ url('/home') }}" class="btn btn-outline-dark btn-icon-split">

                        <i class="fas fa-dark-circle"></i>

                      <span class="text">Inicio</span>
                    </a>
                        <a href="{{ route('login') }}" class="btn btn-outline-dark btn-icon-split">

                                  <i class="fas fa-dark-circle"></i>

                                <span class="text">Ingresar</span>
                              </a>

                        @if (Route::has('register'))


                            <a href="{{ route('register') }}" class="btn btn-outline-dark btn-icon-split">

                                  <i class="fas fa-dark-circle"></i>

                                <span class="text">Registrar</span>
                              </a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="text-center">
                    <img src="/adminlte/img/logoutc.png" alt="" class="img-fluid animated zoomIn" width="500px;">
                </div>
                <br>
                        <br>

                <div class="container h-100" >
                    <div class="d-flex justify-content-center h-100">
                          <form action=" {{ url('/') }}" method="GET">
                      <div class="searchbar">
                        <input class="search_input" type="text" name="nombre" placeholder="Buscar">
                        <a href="#" class="search_icon"><i class="fas fa-search fa-xs"></i></a>
                      </div>
                    </form>
                    </div>
                  </div>
                  <br>
                  <br>
                        <br>
                        <br>



                  <div class="card border-dark" style="border:black 5px solid; "  >
                    <div class="card-header bg-transparent border-black text-center" >
                        Búsqueda avanzada

                    </div>
                    <div class="card-body text-dark" >


                            {{ Form::open(['method' => 'GET', 'class' => 'form-inline pull-right']) }}
                            <div class="form-group">

                                {{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'nombre']) }}

                            </div>


                            <div class="form-group">
                                {{ Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'descripcion']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::text('dependecia', null, ['class' => 'form-control', 'placeholder' => 'dependecia']) }}
                            </div>

                            <div class="form-group">
                                    {{ Form::text('prodecencia', null, ['class' => 'form-control', 'placeholder' => 'prodecencia']) }}
                                </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        {{ Form::close() }}
               </div>
                    <!--/.Panel-->


                </div>


            </div>

        </div>


        <div class="card border-dark " style="border:black 5px solid; ">

                <div class="card shadow mb-4">
                        <div class="card-header py-3" >
                          <h6 class="m-0 font-weight-bold text-dark">Resultados de Busqueda</h6>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                                <tr align="center">
                                                        <th scope="col">#</th>
                                                        <th scope="col">Nombre</th>

                                                        <th scope="col">Descripcion</th>
                                                        <th scope="col">Dependencia</th>
                                                        <th scope="col">Procedencia</th>
                                                        <th scope="col">Archivo</th>

                                                </tr>
                                        </thead>
                                        <tfoot>
                                        </tfoot>
                                        <tbody>

                                                @foreach ($archivos as $archivo )
                                                <tr>
                                                  <th align="center" scope="row">{{ $loop->iteration }}</th>




                                                  <td align="center">{{ $archivo->nombre }}</td>


                                                  <td align="center">{{ $archivo->descripcion}}</td>
                                                  <td align="center">{{ $archivo->dependecia}}</td>
                                                  <td align="center">{{ $archivo->prodecencia}}</td>
                                                  <td align="center"><a href="{{ url('/resultado/'.$archivo->id) }}" class="btn btn-danger btn-icon-split">
                                                    <span class="icon text-white-50">
                                                      <i class="fas fa-file-pdf"></i>
                                                    </span>
                                                    <span class="text">PDF
                                                    </span>
                                                  </a></td>
                                                </tr>
                                                @endforeach
                                            </tr>

                                     </tbody>

                                </table>

                          </div>
                        </div>
                      </div>

                    </div>

                    <!-- Bootstrap core JavaScript-->
                    <script src="/adminlte/vendor/jquery/jquery.min.js"></script>
                    <script src="/adminlte/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    <script src="/adminlte/vendor/jquery-easing/jquery.easing.min.js"></script>

                    <!-- Custom scripts for all pages-->
                    <script src="/adminlte/js/sb-admin-2.min.js"></script>



    </body>


</html>
