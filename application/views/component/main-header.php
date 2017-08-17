<!-- Logo -->
<a href="<?php echo base_url()."main";?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>G</b>S&F</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Gangsar</b>Snack&Food</span>
    <!-- <img src="dist/img/logo cka.png" class="img-circle" alt="User Image"> -->
</a>

<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo base_url();?>dist/img/avatar9.png" class="user-image" alt="User Image">
                    <?php
                    $user=$this->ion_auth->user()->row()->username;
                    echo "<span>Welcome, ".$user."</span>";
                    ?>
                </a>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
                <a href="<?php echo base_url()."logout"?>"><i class="fa fa-sign-out"></i></a>
            </li>
            <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>

        </ul>
    </div>

</nav>