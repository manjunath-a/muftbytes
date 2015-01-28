@extends('layout')
@include('header')
@section('content')
<div class='container'>
    <ol class="breadcrumb">
        <li><a href="<?php echo URL::to('user');?>">Users</a></li>
        <li class="active">View Usage</li>
    </ol>
    <h3>Data usage for {{ $user_name[0]->user_name }}</h3>
    <table class="table table-hover">
        <thead>
            <tr>
            <th>Application Id</th>
            <th>Application Name</th>
            <th>Data Consumed</th>
            <th>Date and Time</th>
            </tr>
        </thead>
        <tbody>
           @if($count != 0)
           @foreach($viewUsage as $viewUsagekey)
                <tr>
                    <td>{{ $viewUsagekey->application_id }}</td>
                    <td>{{ $viewUsagekey->application_name}}</td>
                    <td>{{ $viewUsagekey->usage }}</td>
                    <td>{{ $viewUsagekey->log_time }}</td>
                </tr>
           @endforeach
           @else
                <tr>
                    <td>{{ 'No Data Found'}}</td>
                </tr>
            @endif    
        </tbody>
    </table>
</div>   
@stop
