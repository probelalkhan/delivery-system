@extends('adminlte::page')

@section('title', 'Order Detail')

@section('content_header')
    <h1 class="text-center">Order Details</h1>
@stop

@section('content')
    <div class="row">

        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Order ID: {{ $order->id }}
                </div>

                <div class="card-body">

                    <table>

                        <tr>
                            <th>Address Pickup</th>
                            <td>{{ $order->address_pickup }}</td>
                        </tr>
                        <tr>
                            <th>Address Delivery</th>
                            <td>{{ $order->address_delivery }}</td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>{{ $order->title }}</td>
                        </tr>
                        <tr>
                            <th>Nature Container</th>
                            <td>{{ $order->nature_container }}</td>
                        </tr>
                        <tr>
                            <th>Packaging</th>
                            <td>{{ $order->packaging }}</td>
                        </tr>
                        <tr>
                            <th>Weight</th>
                            <td>{{ $order->weight }}</td>
                        </tr>
                        <tr>
                            <th>Length</th>
                            <td>{{ $order->length }}</td>
                        </tr>
                        <tr>
                            <th>Width</th>
                            <td>{{ $order->width }}</td>
                        </tr>
                        <tr>
                            <th>Height</th>
                            <td>{{ $order->height }}</td>
                        </tr>
                        <tr>
                            <th>Pickup</th>
                            <td>{{ $order->pickup }}</td>
                        </tr>
                        <tr>
                            <th>Delivery</th>
                            <td>{{ $order->delivery }}</td>
                        </tr>
                        <tr>
                            <th>Note</th>
                            <td>{{ $order->note }}</td>
                        </tr>

                    </table>

                </div>
            </div>

        </div>

        <div class="col-md-6">
            @foreach ($deliveries as $delivery)
                <div class="card">
                    <div class="card-body">
                        <p>
                            Delivery Number : {{ ++$count }}
                        </p>
                        <table>
                            <tr>
                                <th>Vehicle</th>
                                <td>{{ $delivery->vehicle->category }}</td>
                            </tr>
                            <tr>
                                <th>Driver</th>
                                <td>{{ $delivery->driver->first_name . ' ' . $delivery->driver->last_name }}</td>
                            </tr>
                        </table>
                        <a href="#" class="link">More info</a>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Create a row on Delivery Table
                </div>

                <div class="card-body">
                    <p>
                        Special Title Treatment
                    </p>

                    @include('admin.result')

                    <form class="form" method="POST" action="{{ Request::url() }}">

                        @csrf

                        <div class="form-group">
                            <label for="vehicleid">Select Vehicle</label>
                            <select id="vehicleid" name="vehicleid" class="custom-select">
                                @foreach ($vehicles as $vehicle)
                                    <option value="{{ $vehicle->id }}">{{ $vehicle->category }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="driverid">Select Driver</label>
                            <select id="driverid" name="driverid" class="custom-select">
                                @foreach ($drivers as $driver)
                                    <option value="{{ $driver->id }}">{{ $driver->first_name . ' '. $driver->last_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="note">Note</label>
                            <input type="text" class="form-control" name="note" id="note" />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Delivery</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@stop
