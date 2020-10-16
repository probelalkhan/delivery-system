
@extends('adminlte::page')

@section('title', 'Add Address')

@section('content_header')
    <h1 class="text-center">Add Address</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class='card' style="width:50%; margin:12px auto;">
                <div class="card-body">

                    @include('admin.result')

                    <form class="form" method="POST" action="{{ Request::url() }}">

                        @csrf

                        <div class="form-group">
                            <label for="clientid">Select Client</label>
                            <select id="clientid" name="clientid" class="form-control">
                                @foreach ($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->company_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" name="postalcode" id="postalcode" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="latitude">Latitude</label>
                            <input type="text" name="latitude" id="latitude" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="longitude">Longitude</label>
                            <input type="text" name="longitude" id="longitude" class="form-control" />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Carrier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
