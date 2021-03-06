@extends('layout')
@include('header')
@section('content')
<div class='container'>
    <style>
        th,td{
            text-align: center;
        }
        
    </style>
    <ol class="breadcrumb">
        <li class="active">Applications</li>
    </ol>
    <button onclick="window.location.href='<?php echo URL::to('addapplication');?>'" class='btn btn-primary'>Add Application</button>
    <table class="table table-hover">
        <thead>
            <tr>
                <th colspan="2">Application</th>
                <th>URL</th>
                <th>Description</th>
                <th>status</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach($applicationDetails as $applicationDetailsValue)
                <tr>
                    <td><img src='<?php echo URL::to('/')."/app/uploads/".$applicationDetailsValue->icon; ?>' style='height: 70px;width: 70px;'></td>
                    <!--<td><img src='<?php echo app_path()."/uploads/".$applicationDetailsValue->icon; ?>'></td>-->
                    <td>{{ $applicationDetailsValue->application_name }}</td>
                    <td>{{ $applicationDetailsValue->url }}</td>
                    <td><p style='text-align: left'>{{ $applicationDetailsValue->description }}<p></td>
                    @if($applicationDetailsValue->status == 1)
                    <td>Enabled</td>
                    @else
                    <td>Disabled</td>
                    @endif
                    <td>{{ HTML::linkRoute('edit_application','Edit',array($applicationDetailsValue->application_id))}}</td>
                    <td><a href='#' onclick="getConfirm(<?php echo $applicationDetailsValue->application_id;?>)">Delete</a></td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <script type='text/javascript'>
        function getConfirm(id)
        {
                bootbox.confirm("Do you want to delete this app ?",function(res){
                    if(res == true)
                        window.location.href="<?php echo URL::to('deleteapplication')?>/"+id;
                });
                
        }
    </script>
</div>
@stop