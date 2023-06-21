@extends('layouts.admin')

@section('content')
    <div class="content-wrapper" id="app">
        <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h2>Nueva reserva</h2>
                <p class="card-description">Todos los campos son requeridos</p>
                <form-booking-admin></form-booking-admin>
            </div>
            </div>
        </div>
        </div>
    </div>
@stop