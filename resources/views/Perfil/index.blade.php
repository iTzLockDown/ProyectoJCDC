@extends('layouts.principal')

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Modulo</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active">Modulo</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_modulo"><i class="fa fa-plus"></i> Nuevo Modulo</a>
                <div class="view-icons">
                    <a href="" class="grid-view btn btn-link"><i class="fa fa-th"></i></a>
                    <a href="" class="list-view btn btn-link active"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <!-- Search Filter -->
    <div class="row filter-row">
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Employee ID</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Employee Name</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus select-focus">
                <select class="select floating">
                    <option>Select Designation</option>
                    <option>Web Developer</option>
                    <option>Web Designer</option>
                    <option>Android Developer</option>
                    <option>Ios Developer</option>
                </select>
                <label class="focus-label">Designation</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <a href="#" class="btn btn-success btn-block"> Search </a>
        </div>
    </div>
    <!-- /Search Filter -->
    <!-- /Page Header -->
    <div id="crud" class="row" >
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Responsive Tables</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-nowrap mb-0">
                            <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Modulo</th>
                                <th>Estado</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr  v-for="modulo in modulos">
                                <td>@{{modulo.id }}</td>
                                <td>@{{modulo.nombre }}</td>
                                <td>@{{modulo.estado }}</td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm" v-on:click.prevent="editModulo(modulo)"> <i class="fa fa-edit"></i> </a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-danger btn-sm" v-on:click.prevent="deleteModulo(modulo)"> <i class="fa fa-trash"></i> </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @include('Modulo.create')
            @include('Modulo.update')
        </div>
    </div>




@endsection
