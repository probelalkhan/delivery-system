@extends('adminlte::page')

@section('title', 'Clients')

@section('content_header')
    <h1 class="text-center">Clients</h1>
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
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->company_name }}</td>
                                    <td>{{ $client->ice }}</td>
                                    <td>{{ $client->phone }}</td>
                                    <td>{{ $client->address }}</td>
                                    <td>
                                        <a href="{{ URL::to('/admin/client/add?client_id='.$client->id) }}" class="link">Edit</a>&nbsp;
                                        <a href="#" data-tag="{{ $client->id }}" class="link text-danger link-delete" data-toggle="modal" data-target="#confirmationModal">Delete</a>
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
        var url = "{{ URL::to('/admin/client/delete/') }}";
        console.log(url);
        $("#confirmationForm").attr('action', url +'/'+id);
    });
</script>
@stop

