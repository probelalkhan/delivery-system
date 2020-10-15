@extends('adminlte::page')

@section('title', 'Add Client')

@section('content_header')
    <h1 class="text-center">Add Client</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="width:50%; margin:12px auto;">
                <div class="card-body">
                    <form class="form" method="POST" action="{{ Request::url() }}">

                        @csrf

                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" id="company_name" name="company_name" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="ice">ICE</label>
                            <input type="text" id="ice" name="ice" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control @if($errors->has('email')) is-invalid @endif"/>
                            <div class="invalid-feedback">{{$errors->first('email')}}</div>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="activities">Activities</label>
                            <input type="text" id="activities" name="activities" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="agreement">Agreement</label>
                            <input type="text" id="agreement" name="agreement" class="form-control" />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Client</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
