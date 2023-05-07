@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <div class="row p-2">
                    <div class="col-10">
                        <h2>Documentos</h2>
                    </div>
                    <div class="col-2">
                        <a type="button" href="/admin/documents/create" class="btn btn-outline-info btn-fw">Agregar documento</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>User</th>
                            <th>Product</th>
                            <th>Sale</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Jacob</td>
                            <td>Photoshop</td>
                            <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                            <td><label class="badge badge-danger">Pending</label></td>
                        </tr>
                        <tr>
                            <td>Messsy</td>
                            <td>Flash</td>
                            <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                            <td><label class="badge badge-warning">In progress</label></td>
                        </tr>
                        <tr>
                            <td>John</td>
                            <td>Premier</td>
                            <td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
                            <td><label class="badge badge-info">Fixed</label></td>
                        </tr>
                        <tr>
                            <td>Peter</td>
                            <td>After effects</td>
                            <td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
                            <td><label class="badge badge-success">Completed</label></td>
                        </tr>
                        <tr>
                            <td>Dave</td>
                            <td>53275535</td>
                            <td class="text-success"> 98.05% <i class="ti-arrow-up"></i></td>
                            <td><label class="badge badge-warning">In progress</label></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@stop