@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row p-2">
                            <div class="col-10">
                                <h2>Reservas</h2>
                            </div>
                            <div class="col-2">
                                <a type="button" href="/admin/bookings/create" class="btn btn-outline-info btn-fw">Nueva reserva</a>
                            </div>
                        </div>
                        <div id="app">
                            <calendar></calendar>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@push('custom-scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
@endpush
