@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2>Nuevo horario</h2>
                        <p class="card-description">Todos los campos son requeridos</p>
                        <form method="POST" action="{{ route('admin.hours.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Seleccione un horario</label>
                                <input type="time" class="form-control" id="exampleInputUsername1" name="hour" list="avail" required>
                                <datalist id="avail">
                                    <option value="00:00">
                                    <option value="01:00">
                                    <option value="02:00">
                                    <option value="03:00">
                                    <option value="04:00">
                                    <option value="05:00">
                                    <option value="06:00">
                                    <option value="07:00">
                                    <option value="08:00">
                                    <option value="09:00">
                                    <option value="10:00">
                                    <option value="11:00">
                                    <option value="12:00">
                                    <option value="13:00">
                                    <option value="14:00">
                                    <option value="15:00">
                                    <option value="16:00">
                                    <option value="17:00">
                                    <option value="18:00">
                                    <option value="19:00">
                                    <option value="20:00">
                                    <option value="21:00">
                                    <option value="22:00">
                                    <option value="23:00">
                                </datalist>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="3" name="description"></textarea>
                                <small class="form-text text-muted">Realiza una pequeña descripción</small>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
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
