@extends('adminlte::page')

@section('title', 'Carriers')

@section('content_header')
    <h1 class="text-center">Vehicles</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class='card' style="width:75%; margin:12px auto;">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Company Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicles as $vehicle)
                                <tr>
                                    <td>{{ $vehicle->id }}</td>
                                    <td>{{ $vehicle->category }}</td>
                                    <td>{{ $vehicle->carrier->company_name }}</td>
                                    <td></td>
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