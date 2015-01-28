@extends('layout')
@section('content')
@include('header')
<div class='container'>
    <style>
        .float
        {
            float: left;
            clear:left;
        }
    </style>
    <ol class="breadcrumb">
        <li><a href="<?php echo URL::to('user'); ?>">Users</a></li>
        <li class='active'>Edit User</li>
    </ol>
    {{ Form::open(array('url' => 'update/'.$user_information[0]->user_id)) }}
        <fieldset disabled>
            <div class="form-group col-md-6 float">
                <label for="username">User Name</label>
                <!--<input type="text" id="username" class="form-control" name="username" placeholder="Disabled input">-->
                {{ Form::text('username',$user_information[0]->user_name, array('class' => 'form-control','id'=>'username')) }}
            </div>
            <div class="form-group col-md-6 float">
                <label for="mobileno">Mobile No.</label>
                <!--<input type="text" id="disabledTextInput" class="form-control " placeholder="Disabled input">-->
                {{ Form::text('mobileno',$user_information[0]->user_phone, array('class' => 'form-control','id'=>'mobileno')) }}
            </div><br>
            <div class="form-group col-md-6 float">
                <label for="operator">Operator</label>
                <!--<input type="text" id="disabledTextInput" class="form-control " placeholder="Disabled input">-->
                {{ Form::text('operator',$user_information[0]->operator_name, array('class' => 'form-control','id'=>'operator')) }}
            </div>
        </fieldset>
        <div class="form-group">
            <label for='enableuser'>
                @if($user_information[0]->user_status == 1)
                {{ Form::checkbox('enableuser',1, true,['id' => 'enableuser']) }}  <span>Enable User</span>
                @else
                {{ Form::checkbox('enableuser',1, false,['id' => 'enableuser']) }}  <span>Enable User</span>
                @endif
            </label>
    </div>
         <div class="form-group">
            <label for='enablerecharge'>
                @if($user_information[0]->recharge_status == 1)
                    {{ Form::checkbox('enablerecharge',1, true,['id' => 'enablerecharge']) }}  <span>Enable Recharge</span>
                @else
                    {{ Form::checkbox('enablerecharge',1,false,['id' => 'enablerecharge']) }}  <span>Enable Recharge</span>
                    @endif
            </label>
    </div>
        <input type="submit" class="btn btn-primary" value="Update">
        <button type="button" class="btn btn-danger" onclick="window.location.href='<?php echo URL::to('user')?>'">Cancel</button>    
        {{ Form::close()}}
        
</div>

@stop
