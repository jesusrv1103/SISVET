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
<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Registro de clientes </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" placeholder="Ejemplo: Juan Juarez Vargas ">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Ejemplo: juan@gmail.com">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Enviar recordatorios
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label class="form-check-label" for="exampleCheck1">Campos adicionales
                                </label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Teléfono móvil
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control"
                                            data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask=""
                                            inputmode="text">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Teléfono
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control"
                                            data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask=""
                                            inputmode="text">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input type="text" class="form-control" placeholder="Ejemplo: Linda Vista, Ficus 52">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Ciudad</label>
                                    <input type="text" class="form-control" placeholder="Ejemplo: Zacatecas">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Identificación</label>
                                    <input type="text" class="form-control" placeholder="Ejemplo: 0747116375842">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Veterinario derivante</label>
                                    <input type="text" class="form-control" placeholder="Ejemplo: Horacio de la Torre">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <label class="form-check-label" for="exampleCheck1">Datos de facturación
                                </label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>RFC</label>
                                    <input type="text" class="form-control" placeholder="Ejemplo: 0747116375842">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Razón Social</label>
                                    <input type="text" class="form-control" placeholder="Ejemplo: Horacio de la Torre">
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

@push('styles')
@endpush

@push('scripts')
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<script>
    $(function () {
      $('[data-mask]').inputmask()

    });
  </script>

@endpush


@stop
