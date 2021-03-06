@extends('layout')
@section('content')
@include('loginheader')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <?php if(Session::get('message')!=null)
                { ?>
            <div class="bs-example bs-example-standalone" data-example-id="dismissible-alert-js">
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Please check Username and Password</strong>
            </div>
            </div>
            <?php }?>
            <h1 class="text-center login-title">Sign in to continue</h1>
            <div class="account-wall">
                <img class="profile-img" src="{{asset('assets/image/profile.png')}}"
                    alt="profile image">
                {{ Form::open(array('url' => 'login','class' => 'form-signin')) }}
                {{ Form::email('username',null,array('class'=>'form-control','name'=>'email','placeholder'=>'Email','required'=>''))}}
                {{ Form::password('Password',array('class'=>'form-control','name'=>'password','placeholder'=>'Password','required'=>''))}}
                <br>
                   <!-- <input type="text" class="form-control" placeholder="Email" required autofocus>
                    <input type="password" class="form-control" placeholder="Password" required>-->
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                    <!--<a href="#" class="pull-right need-help">Forgot Password? </a><span class="clearfix"></span>-->
                   {{ HTML :: link('#','Forgot Password?',array('class'=>'pull-right need-help'))}}

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop

