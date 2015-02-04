@extends('layout')
@include('header')
@section('content')
<div class='container'>
    <ol class="breadcrumb">
        <li><a href="<?php echo URL::to('application') ?>">Application</a></li>
        <li class="active">Add New</li>
    </ol>
    <?php echo Form::open(array('url' => 'storeapplication', 'files' => true)) ?>
    <table class="table">
        <tr>
            <td style='width:25%'>
                <div class="form-group">
                    <label for="Upload">Upload Image</label><br>
                    <img src='<?php echo asset("assets/image/placeholder.png"); ?>' style="width: 200px;float: left;" id="Upload">
                    <?php echo Form::file('profile'); ?>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="appname">Name</label>
                    {{ Form::text('appname',null, array('class' => 'form-control','id' => 'appname','placeholder' => 'Enter App Name','required')) }}
                </div>
                <div class="form-group">
                    <label for="appurl">Url</label>
                    {{ Form::text('appurl',null, array('class' => 'form-control','id' => 'appurl','placeholder' => 'Enter app url excluding http://','required')) }}
                    <button type="button" id="desc" class="btn btn-success btn-xs">Get Description</button>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    {{ Form::textarea('appdesc',null, array('class' => 'form-control','rows' => '3','id' => 'description','placeholder' => 'Enter the description','required'))}}
                    <!--<textarea rows="4" cols="50" class="form-control" id="description" name="description" placeholder="Enter Description"></textarea> -->
                </div>
                <div class="form-group">
                    <label for="datacap">Data Cap</label>
                    {{ Form::text('datacap',null, array('class' => 'form-control','id' => 'datacap','placeholder' => 'Data cap in kb','required')) }}
                </div>
                <label for="enable">Enable Application</label><br>
                {{ Form::checkbox('enable',null,true)}}
                <br><br>
                <button type="submit" class="btn btn-info">Save</button>
                <button type="button" onclick='window.location.href = "<?php echo URL::to('application'); ?>"' class="btn btn-danger">Cancel</button>

            </td>
        </tr>
    </table>
    <?php echo Form::close();?>
</div>
<script type="text/javascript">
                       $("#desc").click(function() {
                               var xmlhttp;
                               var url = document.getElementById('appurl').value;
                               if (window.XMLHttpRequest)
                               {// code for IE7+, Firefox, Chrome, Opera, Safari
                                   xmlhttp = new XMLHttpRequest();
                               }
                               xmlhttp.onreadystatechange = function()
                               {
                                   if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                                   {
                                       document.getElementById("description").innerHTML = xmlhttp.responseText;
                                   }
                                   
                               }
                               xmlhttp.open("GET","<?php echo URL::to('getdescription')?>/"+url,true);
                               xmlhttp.send();
                       });
</script>
@stop