@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <div class="row p-2">
                    <div class="col-8">
                        <h2>Horarios</h2>
                    </div>
                    <div class="col-4" style="text-align: end">
                        <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                            <a type="button" href="/admin/hours/create" class="btn btn-outline-info btn-fw">Agregar horario</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Horario</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hours as $hour)
                            <tr>
                                <td>{{ $hour->id }}</td>
                                <td>{{ $hour->hour }}</td>
                                <td>
                                    <a href="{{ route('admin.hours.destroy', $hour)}}" class="btn btn-outline-info btn-fw">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@stop