@extends('layout')
@section('content')
    @include('header')
    <div class="container">
        <ol class="breadcrumb">
            <li class="active">Home</a></li>
        </ol>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Mobile No.</th>
                    <th>Operator</th>
                    <th>User status</th>
                    <th>Recharge status</th>
                    <th>Action</th>
            </thead>
        </table>
        <?php
    echo "<pre>";
    print_r($user_details);
    echo "</pre>";
    ?>
    </div>
    
@stop
