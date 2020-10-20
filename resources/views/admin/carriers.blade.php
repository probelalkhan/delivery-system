@extends('adminlte::page')

@section('title', 'Carriers')

@section('content_header')
    <h1 class="text-center">Carriers</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class='card' style="width:95%; margin:12px auto;">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Company Name</th>
                                <th>ICE</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carriers as $carrier)
                                <tr>
                                    <td>{{ $carrier->id }}</td>
                                    <td>{{ $carrier->company_name }}</td>
                                    <td>{{ $carrier->ice }}</td>
                                    <td>{{ $carrier->phone }}</td>
                                    <td>{{ $carrier->address }}</td>
                                    <td>
                                        <a href="/admin/carrier/add?carrier_id={{ $carrier->id }}" class="link">Edit</a>&nbsp;
                                        <a href="#" data-tag="{{ $carrier->id }}" class="link text-danger link-delete" data-toggle="modal" data-target="#confirmationModal">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('commons.confirmationdialog')

@stop

@section('js')
<script>
    $(".link-delete").click(function(){
        var id = $(this).data('tag');
        $("#confirmationForm").attr('action','/admin/carrier/delete/'+id);
    });
</script>
@stop
