@extends('adminlte::page')

@section('title', 'Addresses')

@section('content_header')
    <h1 class="text-center">Addresses</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class='card' style="width:95%; margin:12px auto;">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Client</th>
                                <th>Title</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Postal Code</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
