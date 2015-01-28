@extends('layout')
@section('content')
    @include('header')
    <style type='text/css'>
        .td
        {
            text-align:center;
        }
    </style>
    <div class="container">
        <ol class="breadcrumb">
            <li class="active">Users</li>
        </ol>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Mobile No.</th>
                    <th>Operator</th>
                    <th>User status</th>
                    <th>Recharge Status</th>
                    <th colspan='2'>Action</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($user_details as $user_key)
                        <tr>
                            <td>{{ $user_key->user_name }}</td>
                            <td>{{ $user_key->user_phone }}</td>
                            <td>{{ $user_key->operator_name }}</td>
                        @if($user_key->user_status == 1)
                            <td>Enable</td>
                        @else
                            <td>Disable</td>
                        @endif
                        @if($user_key->recharge_status == 1)
                            <td>Enable</td>
                        @else
                            <td>Disable</td>
                        @endif
                        <td>{{ HTML::linkRoute('edit_user', 'Edit', array($user_key->user_id)) }}</td>
                        <td>{{ HTML::linkRoute('view_usage', 'View Usage', array($user_key->user_id)) }}</td>
                            </tr>
                        @endforeach
            </tbody>
        </table>
    </div>
    
@stop
