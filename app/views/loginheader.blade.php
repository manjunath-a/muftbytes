<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo URL::to('/'); ?>"><img src='{{asset("assets/image/logo_blue.png")}}' style="height: 30px;"></a>
    </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li 
                    <?php if($Head == 'Home')
                            echo "class='active'";?>
                    ><a href="{{ URL::to('/')}}">Head</a></li>
                <li 
                    <?php if($Head == 'Support')
                            echo "class='active'";?>
                    ><a href="{{ URL::to('/')}}">Support</a></li>
            </ul>
        </div>
    </div>
</nav>
