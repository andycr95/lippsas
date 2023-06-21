@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2>Actualizar documento</h2>
                        {{$document}}
                        <p class="card-description">Todos los campos son requeridos</p>
                        <form method="POST" action="{{ route('admin.documents.update', $document->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$document->id}}">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nombre del documento</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" value="{{$document->name}}" placeholder="Retencion 2023" name="name">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Cliente</label>
                                <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="client_id">
                                    <option value="{{$document->client->id}}">{{$document->client->name}}</option>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('client_id')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4" name="description">{{$document->description}}</textarea>
                                <small class="form-text text-muted">Realiza una pequeña descripción</small>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <div class="dropify-wrapper">
                                    <div class="dropify-message"><span class="file-icon">
                                            <p>Arrastre y suelte un archivo aquí o haga clic en</p>
                                        </span>
                                        <p class="dropify-error">Ooops, algo mal añadido.</p>
                                    </div>
                                    <div class="dropify-loader"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div><input type="file" class="dropify" name="file"><button type="button"
                                        class="dropify-clear">Eliminar</button>
                                    <div class="dropify-preview"><span class="dropify-render"></span>
                                        <div class="dropify-infos">
                                            <div class="dropify-infos-inner">
                                                <p class="dropify-filename"><span class="file-icon"></span> <span
                                                        class="dropify-filename-inner"></span></p>
                                                <p class="dropify-infos-message">Arrastrar y soltar o hacer clic para reemplazar</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <x-input-error :messages="$errors->get('file_url')" class="mt-2" />
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button class="btn btn-light">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
