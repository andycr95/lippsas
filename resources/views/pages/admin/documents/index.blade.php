@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <div class="row p-2">
                    <div class="col-8">
                        <h2>Documentos</h2>
                        {{ $documents }}
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-md-6 text-nowrap">
                                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                                    <a type="button" href="/admin/documents/create" class="btn btn-outline-info btn-fw">Agregar documento</a>
                                </div>
                            </div>
                            <div class="col">
                                <form action="{{ route('admin.documents.index')}}">
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
                            <th>Cliente</th>
                            <th>Descripción</th>
                            <th>Archivo</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($documents as $document)
                            <tr>
                                <td>{{ $document->name }}</td>
                                <td>{{ $document->client->name }}</td>
                                <td>{{ $document->description }}</td>
                                <td><a href="{{ route('admin.documents.download', $document->id)}}">Ver archivo</a></td>
                                <td>
                                    <a href="{{ route('admin.documents.show', $document->id)}}" class="btn btn-outline-info btn-fw">
                                        <i class="fa fa-pencil"></i>
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