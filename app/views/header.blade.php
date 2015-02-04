<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo URL::to('dashboard'); ?>"><img src='{{asset("assets/image/logo_blue.png")}}' style="height: 30px;"></a>
    </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?php if($header == 'dashboard')
                            echo 'class="active"';?>
                    ><a href="<?php echo URL::to('dashboard');?>">Dashboard</a></li>
                <li <?php if($header == 'users')
                            echo 'class="active"';?>
                    ><a href="<?php echo URL::to('user');?>">Users</a></li>
                <li 
                    <?php if($header == 'application')
                            echo 'class="active"';?>><a href="<?php echo URL::to('application');?>">Applications</a></li>
                <li class="dropdown <?php if($header == 'report')
                            echo 'active';?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo URL::to('rechargelist')?>">Recharge List</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administrator<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Lagout</a></li>
          </ul>
        </li>
            </ul>
        </div>
    </div>
</nav>
