
@extends('adminlte::page')

@section('title', 'Add Carrier')

@section('content_header')
    <h1 class="text-center">Add Carrier</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class='card' style="width:50%; margin:12px auto;">
                <div class="card-body">

                    @include('admin.result')

                    <form class="form" method="POST" action="{{ Request::url() }}">

                        @csrf

                        <input type="hidden" value="{{ $carrier->id ?? -1 }}" name="carrier_id" />

                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input value="{{ $carrier->company_name ?? '' }}" type="text" name="company_name" id="company_name" class="form-control" required/>
                        </div>

                        <div class="form-group">
                            <label for="ice">ICE</label>
                            <input value="{{ $carrier->ice ?? '' }}" type="text" name="ice" id="ice" class="form-control"  required/>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input value="{{ $carrier->phone ?? '' }}" type="text" name="phone" id="phone" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input value="{{ $carrier->address ?? '' }}" type="text" name="address" id="address" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label for="activities">Activities</label>
                            <input value="{{ $carrier->activities ?? '' }}" type="text" name="activities" id="activities" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label for="agreement">Agreement</label>
                            <input value="{{ $carrier->agreement ?? '' }}" type="text" name="agreement" id="agreement" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label for="framework">Framework</label>
                            <input value="{{ $carrier->framework ?? '' }}" type="text" name="framework" id="framework" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label for="scope">Scope</label>

                            <select type="text" name="scope" id="scope" class="custom-select" >
                                <option value="Transporteur">Transporteur</option>
                                <option value="Commissionnaire">Commissionnaire</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">{{ $carrier != null ? 'Update' : 'Save'}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
