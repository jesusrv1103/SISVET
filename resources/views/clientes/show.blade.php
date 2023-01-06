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
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                    <li class="breadcrumb-item active">Gestion Veterinaria 1.0
                    </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@stop
@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Datos del cliente</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">

                <div class="row">
                    <div class="col-12">

                        <div class="post">
                            <div class="user-block">
                                <span>
                                    Jonathan Burke Jr.
                                </span>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="" class="btn-link text-secondary"><i
                                                    class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                                        </li>
                                        <li>
                                            <a href="" class="btn-link text-secondary"><i
                                                    class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                                        </li>
                                        <li>
                                            <a href="" class="btn-link text-secondary"><i
                                                    class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                                        </li>
                                        <li>
                                            <a href="" class="btn-link text-secondary"><i
                                                    class="far fa-fw fa-image "></i> Logo.png</a>
                                        </li>
                                        <li>
                                            <a href="" class="btn-link text-secondary"><i
                                                    class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <span><strong>Datos de Facturación</strong> </span>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="" class="btn-link text-secondary"><i
                                                    class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                                        </li>
                                        <li>
                                            <a href="" class="btn-link text-secondary"><i
                                                    class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                                        </li>
                                        <li>
                                            <a href="" class="btn-link text-secondary"><i
                                                    class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                                        </li>
                                        <li>
                                            <a href="" class="btn-link text-secondary"><i
                                                    class="far fa-fw fa-image "></i> Logo.png</a>
                                        </li>
                                        <li>
                                            <a href="" class="btn-link text-secondary"><i
                                                    class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.card-body -->
</div>


<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Pacientes
        </h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 5%">
                        #
                    </th>
                    <th style="width: 10%">
                        Fotografía
                    </th>
                    <th style="width: 15%">
                        Especie
                    </th>
                    <th style="width: 15%">
                        Nombre
                    </th>
                    <th style="width: 15%">
                        Fecha de Nacimiento
                    </th>
                    <th style="width: 15%" class="text-center">
                        Sexo
                    </th>
                    <th style="width: 10%" class="text-center">
                        Raza
                    </th>
                    <th style="width: 15%">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td class="project_progress">

                    </td>
                    <td class="project-state">

                    </td>
                    <td class="project-actions text-right">

                    </td>
                    <td>
                        <center>

                            <a class="btn  btn-default" href="{{route('pacientes.show',8)}}">


                                <i class="fas fa-folder-open"></i>
                            </a>

                        </center>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>


<div class="card">
    <div class="card-header">
        <h3 class="card-title">Deudas
        </h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 5%">
                        #
                    </th>
                    <th style="width: 10%">
                        Motivo
                    </th>
                    <th style="width: 15%">
                        Usuario
                    </th>
                    <th style="width: 15%">
                        Fecha
                    </th>
                    <th style="width: 15%">
                        Paciente
                    </th>
                    <th style="width: 15%" class="text-center">
                        Deuda
                    </th>

                    <th style="width: 15%">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        #
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td >

                    </td>
                    <td >

                    </td>

                    <td>
                        <center>

                            <a class="btn  btn-default" href="{{route('clientes.show',8)}}">
                                <i class="fas fa-eye"></i>
                            </a>

                        </center>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>


<!-- /.card -->
<!-- /.card -->

@push('styles')

@endpush

@push('scripts')

@endpush

@stop
