
@extends('adminlte::page')

@section('title', 'Add Order')

@section('content_header')
    <h1 class="text-center">Add Order</h1>
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
                            <label for="addressid">Select Address</label>
                            <select id="addressid" name="addressid" class="form-control">
                                @foreach ($addresses as $address)
                                    <option value="{{ $address->id }}">{{ $address->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="naturecontainer">Nature Container</label>
                            <input type="text" name="naturecontainer" id="naturecontainer" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="packaging">Packaging</label>
                            <input type="text" name="packaging" id="packaging" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="weight">Weight</label>
                            <input type="text" name="weight" id="weight" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="length">Length</label>
                            <input type="text" name="length" id="length" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="width">Width</label>
                            <input type="text" name="width" id="width" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="height">Height</label>
                            <input type="text" name="height" id="height" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="pickup">Pickup</label>
                            <input type="date" name="pickup" id="pickup" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="delivery">Delivery</label>
                            <input type="date" name="delivery" id="delivery" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="note">Note</label>
                            <input type="text" name="note" id="note" class="form-control" />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
