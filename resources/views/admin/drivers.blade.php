@extends('adminlte::page')

@section('title', 'Carriers')

@section('content_header')
    <h1 class="text-center">Drivers</h1>
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
                                <th>Name</th>
                                <th>DOB</th>
                                <th>Licence</th>
                                <th>Company Name</th>
                                <th>Vehicle Category</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($drivers as $driver)
                                <tr>
                                    <td>{{ $driver->id }}</td>
                                    <td>{{ $driver->first_name . ' ' . $driver->last_name }}</td>
                                    <td>{{ $driver->dob }}</td>
                                    <td>{{ $driver->licence }}</td>
                                    <td>{{ $driver->carrier->company_name }}</td>
                                    <td>{{ $driver->vehicle_category }}</td>
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
