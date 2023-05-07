@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2>Nuevo documento</h2>
                        <p class="card-description">Todos los campos son requeridos</p>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nombre del documento</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Lip SAS">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Cliente</label>
                                <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nit</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                <small class="form-text text-muted">Realiza una pequeña descripción</small>
                            </div>
                            <div class="dropify-wrapper">
                                <div class="dropify-message"><span class="file-icon">
                                        <p>Arrastre y suelte un archivo aquí o haga clic en</p>
                                    </span>
                                    <p class="dropify-error">Ooops, algo mal añadido.</p>
                                </div>
                                <div class="dropify-loader"></div>
                                <div class="dropify-errors-container">
                                    <ul></ul>
                                </div><input type="file" class="dropify"><button type="button"
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
                            <button type="submit" class="btn btn-primary me-2">Guardar</button>
                            <button class="btn btn-light">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
