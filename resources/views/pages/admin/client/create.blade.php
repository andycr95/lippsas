@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h2>Nuevo cliente</h2>
                <p class="card-description">Todos los campos son requeridos</p>
                <form method="POST" action="{{ route('admin.clients.store') }}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nombre del cliente</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="name" placeholder="Lip SAS" required>
                      <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Correo electronico</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="ejemplo@ejemplo.com" required>
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group">
                      <label>Nit</label>
                      <input type="text" class="form-control" name="nit" placeholder="9003.222.000-2" required>
                      <small class="form-text text-muted">No agregar puntos ni caracteres especiales</small>
                      <x-input-error :messages="$errors->get('nit')" class="mt-2" />
                    </div>
                    <div class="form-group">
                      <label>Telefono</label>
                      <input type="text" class="form-control" name="phone" placeholder="text" required>
                      <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Guardar</button>
                    <button class="btn btn-light">Cancelar</button>
                  </form>
            </div>
            </div>
        </div>
        </div>
    </div>
@stop