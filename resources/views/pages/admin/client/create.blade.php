@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h2>Nuevo cliente</h2>
                <p class="card-description">Todos los campos son requeridos</p>
                <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nombre del cliente</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Lip SAS">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Correo electronico</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ejemplo@ejemplo.com">
                    </div>
                    <div class="form-group">
                      <label>Nit</label>
                      <input type="text" class="form-control" placeholder="9003.222.000-2">
                      <small class="form-text text-muted">No agregar puntos ni caracteres especiales</small>
                    </div>
                    <div class="form-group">
                      <label>Telefono</label>
                      <input type="text" class="form-control" placeholder="text">
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