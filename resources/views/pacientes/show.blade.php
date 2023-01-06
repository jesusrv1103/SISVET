@extends('layout.index')
@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Panel de control </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Pacientes
                    </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@stop
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                            src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/mascotas-dni-cosmopolitan-1634478243.jpg?resize=640:*"
                            alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">Nina Mcintire</h3>



                    <div class="card-body">

                        <strong> Especie</strong>

                        <p class="text-muted">
                            Canino
                        </p>
                        <hr>
                        <strong> Sexo</strong>

                        <p class="text-muted">
                            Canino
                        </p>
                        <hr>
                        <strong> Peso</strong>

                        <p class="text-muted">
                            Canino
                        </p>
                        <hr>
                        <strong>¿Esta castrado?</strong>

                        <p class="text-muted">
                            Canino
                        </p>
                        <hr>
                        <strong> Edad</strong>

                        <p class="text-muted">
                            Canino
                        </p>
                        <hr>
                        <strong> Fecha de nacimiento</strong>

                        <p class="text-muted">
                            Canino
                        </p>
                        <hr>
                        <strong>Último celo</strong>

                        <p class="text-muted">
                            Canino
                        </p>
                        <hr>
                        <strong>Última actualización</strong>

                        <p class="text-muted">
                            Canino
                        </p>

                        <hr>
                        <strong>Fecha de admisión</strong>

                        <p class="text-muted">
                            Canino
                        </p>


                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#historial" data-toggle="tab"> Historial
                                Clínico</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#vacunas" data-toggle="tab">Vacunas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#antiparasitarios"
                                data-toggle="tab">Antiparasitarios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#archivos" data-toggle="tab">Archivos</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#metodos" data-toggle="tab">Métodos
                                complementarios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#internacion" data-toggle="tab"> Internación</a>
                        </li>
                    </ul>

                    <ul class="nav nav-pills pt-2">
                        <li class="nav-item"><a class="nav-link" href="#procedimientos"
                                data-toggle="tab">Procedimientos</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#certificados" data-toggle="tab">Certificados y
                                consentimientos</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#recordatorios"
                                data-toggle="tab">Recordatorios</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#estetica" data-toggle="tab">Estetica y baños</a>
                        </li>

                    </ul>

                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="historial">
                            <div class="row">
                                <div class="col-12">
                                    <a type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                        <i class="fas fa-stethoscope"></i> Nueva Visita
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="card">

                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10%">FECHA</th>
                                                        <th style="width: 40%">MOTIVO</th>
                                                        <th style="width: 40%">DIAGNÓSTICO</th>
                                                        <th style="width: 10%"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2022-12-23</td>
                                                        <td>VOMITO CONSTANTE</td>
                                                        <td>
                                                            INFECCION POR COMER ALIMENTO CADUCADO
                                                        </td>
                                                        <td>
                                                            <a class="btn  btn-default" href="{{route('clientes.show',8)}}">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer clearfix">
                                            <ul class="pagination pagination-sm m-0 float-right">
                                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /.card -->


                                    <!-- /.card -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="vacunas">
                            <!-- /.post -->
                            <div class="row">
                                <div class="col-12">
                                    <a type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                        <i class="fas fa-syringe"></i>
                                        Nueva vacuna
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="antiparasitarios">
                            <a type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                <i class="fas fa-bacteria"></i>
                                Nuevo antiparasitario
                            </a>

                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="archivos">
                            <a type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                <i class="fas fa-file"></i>
                                Nuevo archivo
                            </a>
                        </div>



                        <div class="tab-pane" id="metodos">
                            <a type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                <i class="fas fa-user-nurse"></i>

                                    Nuevo m. complementario


                            </a>


                        </div>

                        <div class="tab-pane" id="internacion">
                            <a type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                <i class="fas fa-hospital"></i>
                               Nueva internación
                            </a>

                        </div>

                        <div class="tab-pane" id="procedimientos">
                            procedimientos
                        </div>

                        <div class="tab-pane" id="certificados">
                            certificados
                        </div>

                        <div class="tab-pane" id="recordatorios">
                            recordatorios
                        </div>

                        <div class="tab-pane" id="estetica">
                            estetica
                        </div>


                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->
</div>
@stop
