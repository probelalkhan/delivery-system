@extends('adminlte::page')

@section('title', 'Carriers')

@section('content_header')
    <h1 class="text-center">Carriers</h1>
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
                                <th>Company Name</th>
                                <th>ICE</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carriers as $carrier)
                                <tr>
                                    <td>{{ $carrier->id }}</td>
                                    <td>{{ $carrier->company_name }}</td>
                                    <td>{{ $carrier->ice }}</td>
                                    <td>{{ $carrier->phone }}</td>
                                    <td>{{ $carrier->address }}</td>
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
