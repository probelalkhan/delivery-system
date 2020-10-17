@extends('adminlte::page')

@section('title', 'Add Vehicle')

@section('content_header')
    <h1 class="text-center">Add Vehicle</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="width:50%; margin:12px auto">
                <div class="card-body">
                    @include('admin.result')
                    <form class="form" method="POST" action="{{ Request::url() }}">

                        @csrf

                        <div class="form-group">
                            <label for="category">Category</label>
                            <select type="text" name="category" id="category" class="custom-select" required>
                                <option value="Solo ST">Solo ST</option>
                                <!-- add more options here -->
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
                            <label for="brand">Brand</label>
                            <input type="text" id="brand" name="brand" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="reference">Reference</label>
                            <input type="text" id="reference" name="reference" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="dateofcirculation">Date of Circulation</label>
                            <input type="date" id="dateofcirculation" name="dateofcirculation" class="form-control" />
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Vehicle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
