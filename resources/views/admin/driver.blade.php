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
                    @include('admin.result')
                    <form class="form" method="POST" action="{{ Request::url() }}">

                        @csrf

                        <input type="hidden" value="{{ $driver->id ?? -1 }}" name="driver_id" />


                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input value="{{ $driver->first_name ?? '' }}" type="text" name="first_name" id="first_name" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input value="{{ $driver->last_name ?? '' }}" type="text" name="last_name" id="last_name" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input value="{{ $driver->dob ?? '' }}" type="date" name="dob" id="dob" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="driving_licence">Driving Licence</label>
                            <input value="{{ $driver->driving_licence ?? '' }}" type="text" name="driving_licence" id="driving_licence" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="year_permit">Year Permit</label>
                            <input value="{{ $driver->year_permit ?? '' }}" type="number" name="year_permit" id="year_permit" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="experience">Experience (Years)</label>
                            <input value="{{ $driver->experience ?? '' }}" type="number" name="experience" id="experience" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="no_of_companies">Number of Companies</label>
                            <input value="{{ $driver->no_of_companies ?? '' }}" type="text" name="no_of_companies" id="no_of_companies" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="vehicle_category">Vehicle Category</label>
                            <select type="text" name="vehicle_category[]" id="category" class="custom-select" multiple required>
                                @include('commons.categories')
                            </select>
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
                            <select type="text" name="delivery_mode[]" id="delivery_mode" class="custom-select" multiple required>
                                <option value="Messagerie">Messagerie</option>
                                <option value="Affretement">Affretement</option>
                                <option value="Lots">Lots</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="enterprise_category">Enterprise Category</label>
                            <input value="{{ $driver->enterprise_category ?? '' }}" type="text" name="enterprise_category" id="enterprise_category" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="commodity_nature">Commodity Nature</label>
                            <select type="text" name="commodity_nature[]" id="commodity_nature" class="custom-select" multiple required>
                                <option value="Non perisable">Non perissable</option>
                                <option value="Perisable">Perissable</option>
                                <option value="Liquide">Liquide</option>
                                <option value="Mat dangereuse">Mat dangereuse</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="professional_training">Professional Training</label>
                            <select type="text" name="professional_training" id="professional_training" class="custom-select" required>
                                <option value="Qualifie">Qualifie</option>
                                <option value="Non Qualifie">Non Qualifie</option>
                            </select>
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
                            <button type="submit" class="btn btn-primary"> {{ $driver == null ? 'Save Driver' : 'Update Driver' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
