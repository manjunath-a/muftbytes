@extends('layout')
@include('header')
@section('content')
<div class='container'>
    <ol class="breadcrumb">
        <li>Recharge</li>
        <li class='active'>Recharge List</li>
    </ol>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Order Id</th>
                <th>User</th>
                <th>Recharge Amount</th>
                <th>Recharge Date</th>
                <th>Recharge Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($recharge_list as $recharge_list_value)
            <tr>
                <td>{{ $recharge_list_value->order_id }}</td>
                <td>{{ $recharge_list_value->user_name }}</td>
                <td>{{ $recharge_list_value->recharge_amount }}</td>
                <td>{{ $recharge_list_value->recharge_date }}</td>
                @if($recharge_list_value->status == 1)
                <td>Success</td>
                @else
                <td>Not Available</td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop