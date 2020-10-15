
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

                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" name="company_name" id="company_name" class="form-control" required/>
                        </div>

                        <div class="form-group">
                            <label for="ice">ICE</label>
                            <input type="text" name="ice" id="ice" class="form-control"  required/>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label for="activities">Activities</label>
                            <input type="text" name="activities" id="activities" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label for="agreement">Agreement</label>
                            <input type="text" name="agreement" id="agreement" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label for="framework">Framework</label>
                            <input type="text" name="framework" id="framework" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label for="scope">Scope</label>

                            <select type="text" name="scope" id="scope" class="custom-select" >
                                <option value="Transporteur">Transporteur</option>
                                <option value="Commissionnaire">Commissionnaire</option>
                            </select>
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
