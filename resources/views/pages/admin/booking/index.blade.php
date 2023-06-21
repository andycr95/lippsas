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
                        <div class="table-responsive">
                            <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"></div>
                                    <div class="col-sm-12 col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="display expandable-table dataTable no-footer"
                                            style="width: 100%;" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th tabindex="0" style="width: 75px;">Cliente</th>
                                                    <th tabindex="0" style="width: 93px;">Telefono</th>
                                                    <th tabindex="0" style="width: 87px;">Nit</th>
                                                    <th tabindex="0" style="width: 60px;">Fecha</th>
                                                    <th tabindex="0" style="width: 75px;">Hora</th>
                                                    <th tabindex="0" style="width: 60px;">Estado</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($bookings as $booking)
                                                    <tr class="odd shown">
                                                        <td>{{$booking->client->name}}</td>
                                                        <td>{{ $booking->client->phone}}</td>
                                                        <td>{{ $booking->client->nit}}</td>
                                                        <td>{{ $booking->date_creation}}</td>
                                                        <td>{{ $booking->hour->hour}}</td>
                                                        <td>{{ $booking->status}}</td>
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
            </div>
        </div>
    </div>
@stop
