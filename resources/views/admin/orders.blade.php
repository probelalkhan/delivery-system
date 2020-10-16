@extends('adminlte::page')

@section('title', 'Orders')

@section('content_header')
    <h1 class="text-center">Orders</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class='card' style="width:100%; margin:12px auto;">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Address Pickup</th>
                                <th>Address Delivery</th>
                                <th>Title</th>
                                <th>Nature Container</th>
                                <th>Packaging</th>
                                <th>Dimensions</th>
                                <th>Pickup</th>
                                <th>Delivery</th>
                                <th>Note</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->pickupAddress->title }}</td>
                                    <td>{{ $order->deliveryAddress->title }}</td>
                                    <td>{{ $order->title }}</td>
                                    <td>{{ $order->nature_container }}</td>
                                    <td>{{ $order->packaging }}</td>
                                    <td>
                                        <p>
                                            Weight: {{ $order->weight }} <br />
                                            Length: {{ $order->length }} <br />
                                            Width: {{ $order->width }} <br />
                                            Height: {{ $order->height }} <br />
                                        </p>
                                    </td>
                                    <td>{{ $order->pickup }}</td>
                                    <td>{{ $order->delivery }}</td>
                                    <td>{{ $order->note }}</td>
                                    <td><a href="{{ Request::url() . '/' . $order->id}}" class="link">Manage Order</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
