@extends('adminlte::page')

@section('title', 'Add Driver')

@section('content_header')
    <h1 class="text-center">Add Driver</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="width: 50%; margin:12px auto;">
                <div class="card-body">
                    <form class="form" method="POST" action="{{ Request::url() }}">

                        @csrf

                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" name="dob" id="dob" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="driving_licence">Driving Licence</label>
                            <input type="text" name="driving_licence" id="driving_licence" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="year_permit">Year Permit</label>
                            <input type="number" name="year_permit" id="year_permit" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="experience">Experience (Years)</label>
                            <input type="number" name="experience" id="experience" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="no_of_companies">Number of Companies</label>
                            <input type="text" name="no_of_companies" id="no_of_companies" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="vehicle_category">Vehicle Category</label>
                            <input type="text" name="vehicle_category" id="vehicle_category" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="international">International</label><br />
                            <div class="form-check form-check-inline">
                                <input type="radio" name="international" id="international" class="form-check-input" checked value="1" /> Yes &nbsp;
                                <input type="radio" name="international" id="international" class="form-check-input" value="0"/> No
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="delivery_mode">Delivery Mode</label>
                            <input type="text" name="delivery_mode" id="delivery_mode" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="enterprise_category">Enterprise Category</label>
                            <input type="text" name="enterprise_category" id="enterprise_category" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="commodity_nature">Commodity Nature</label>
                            <input type="text" name="commodity_nature" id="commodity_nature" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="avg_stay">Average Stay</label>
                            <input type="text" name="avg_stay" id="avg_stay" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="professional_training">Professional Training</label>
                            <input type="text" name="professional_training" id="professional_training" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="carrier_id">Carrier</label>
                            <select type="text" name="carrier_id" id="carrier_id" class="custom-select" required>
                                @foreach ($carriers as $carrier)
                                    <option value="{{$carrier->id}}">{{ $carrier->company_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Driver</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
