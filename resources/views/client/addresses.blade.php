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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($addresses as $address)
                                <tr>
                                    <td>{{ $address->id }}</td>
                                    <td>{{ $address->client->company_name }}</td>
                                    <td>{{ $address->title }}</td>
                                    <td>{{ $address->address }}</td>
                                    <td>{{ $address->city }}</td>
                                    <td>{{ $address->postal_code }}</td>
                                    <td>{{ $address->latitude }}</td>
                                    <td>{{ $address->longitude }}</td>
                                    <td><a href="#" class="link">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
