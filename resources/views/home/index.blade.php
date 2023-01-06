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
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
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
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="card col-sm-6">
            <div class="card-header border-0">
              <h3 class="card-title">Citas del dia</h3>
              <div class="card-tools">
                <a href="#" class="btn btn-tool btn-sm">
                  <i class="fas fa-download"></i>
                </a>
                <a href="#" class="btn btn-tool btn-sm">
                  <i class="fas fa-bars"></i>
                </a>
              </div>
            </div>
            <div class="card-body table-responsive p-0">
              <table class="table table-striped table-valign-middle">
                <thead>
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Sales</th>
                  <th>More</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>
                    <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Some Product
                  </td>
                  <td>$13 USD</td>
                  <td>
                    <small class="text-success mr-1">
                      <i class="fas fa-arrow-up"></i>
                      12%
                    </small>
                    12,000 Sold
                  </td>
                  <td>
                    <a href="#" class="text-muted">
                      <i class="fas fa-search"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Another Product
                  </td>
                  <td>$29 USD</td>
                  <td>
                    <small class="text-warning mr-1">
                      <i class="fas fa-arrow-down"></i>
                      0.5%
                    </small>
                    123,234 Sold
                  </td>
                  <td>
                    <a href="#" class="text-muted">
                      <i class="fas fa-search"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Amazing Product
                  </td>
                  <td>$1,230 USD</td>
                  <td>
                    <small class="text-danger mr-1">
                      <i class="fas fa-arrow-down"></i>
                      3%
                    </small>
                    198 Sold
                  </td>
                  <td>
                    <a href="#" class="text-muted">
                      <i class="fas fa-search"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                    Perfect Item
                    <span class="badge bg-danger">NEW</span>
                  </td>
                  <td>$199 USD</td>
                  <td>
                    <small class="text-success mr-1">
                      <i class="fas fa-arrow-up"></i>
                      63%
                    </small>
                    87 Sold
                  </td>
                  <td>
                    <a href="#" class="text-muted">
                      <i class="fas fa-search"></i>
                    </a>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->

    <!-- /.row (main row) -->
</div><!-- /.container-fluid -->


@stop
