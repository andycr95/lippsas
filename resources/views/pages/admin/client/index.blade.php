@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <div class="row p-2">
                    <div class="col-8">
                        <h2>Clientes</h2>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-md-6 text-nowrap">
                                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                                    <a type="button" href="/admin/clients/create" class="btn btn-outline-info btn-fw">Agregar Cliente</a>
                                </div>
                            </div>
                            <div class="col">
                                <form action="{{ route('admin.clients.index')}}">
                                    <div class="input-group form-2 pl-0">
                                        <input class="form-control my-0 py-1 red-border" type="text" placeholder="Buscar" name="search" aria-label="Buscar">
                                        <div class="input-group-append">
                                            <button style="background-color: #1cc88a; color: white; width:40px" type="submit" >
                                                B
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo electronico</th>
                            <th>Nit</th>
                            <th>Telefono</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $client->nit }}</td>
                                <td>{{ $client->phone }}</td>
                                <td>
                                    <a href="{{ route('admin.clients.show', $client) }}" class="btn btn-outline-info btn-fw">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5">
                                    {{ $clients->links() }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@stop