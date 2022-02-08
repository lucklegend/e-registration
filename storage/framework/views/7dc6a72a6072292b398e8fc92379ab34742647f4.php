<?php echo $__env->make('layouts.private_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <nav id="nav" class="navbar navbar-inverse navbar-fixed-top hidden-print" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bugoy-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo e(URL::to('/')); ?>" title="E-Register">
                    E-Register
                </a> <!-- / a.navbar-brand -->
            </div> <!-- / .navbar-header -->    
            <div class="collapse navbar-collapse" id="bugoy-1">
        <!--                <ul class="nav navbar-nav"> 
                    <li><a href="http://localhost/km" title="Competency">Competency</a></li>
                </ul>
        -->                    
                <ul class="nav navbar-nav navbar-right"> <!-- level 1 nav -->
                    <li><a href="<?php echo e(URL::to('/')); ?>" title="Home"><span class="fa fa-home"></span> Home</a></li>


                    <li><a href="<?php echo e(URL::to('/events')); ?>" title="Events"><span class="fa fa-calendar"></span> Events</a></li>
                    <li><a href="<?php echo e(URL::to('/attendees')); ?>" title="Attendees"><span class="fa fa-users"></span> Attendees</a></li>
                    <li><a href="<?php echo e(URL::to('/visitors')); ?>" title="Visitors"><span class="fa fa-book"></span> Visitors</a></li>
                    <li><a href="<?php echo e(URL::to('/sites')); ?>" title="Sites"><span class="fa fa-book"></span> Sites</a></li>
                    <li><a href="<?php echo e(URL::to('/barcode')); ?>" title="Barcode"><span class="fa fa-book"></span> Barcode</a></li>
                    <li><a href="<?php echo e(URL::to('/barcode/prereg')); ?>" title="Preregistration Barcode"><span class="fa fa-book"></span>Preregistration Barcode</a></li>

                    <?php if(App\Http\Controllers\LoginController::can_access()): ?>
                    <li class="dropdown"> <!-- .dropdown -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Settings"><span class="fa fa-cogs"></span> Settings <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu"> <!-- level 2 nav -->
                            <?php if(App\Http\Controllers\LoginController::can_access('Users')): ?>
                            <li><a href="<?php echo e(URL::to('/users')); ?>" title="User">Users</a></li>
                            <?php endif; ?>
                            <?php if(App\Http\Controllers\LoginController::can_access('UserGroups')): ?>
                            <li><a href="<?php echo e(URL::to('/usergroups')); ?>" title="User Groups">User Groups</a></li>
                            <?php endif; ?>
                        </ul> <!-- / level 2 nav -->
                    </li> <!-- / .dropdown -->
                    <?php endif; ?>

                    <li><a href="<?php echo e(URL::to('/logout')); ?>" title="Sign Out"><span class="fa fa-sign-out"></span> Sign Out</a></li>

                    <!--
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="<?php echo e(Session::get('ad_u_name')); ?>"><span class="fa fa-user"></span> <?php echo e(Session::get('ad_u_username')); ?> <small><abbr title="<?php echo e(Session::get('ad_pos_name')); ?>">(<?php echo e(Session::get('ad_pos_abbr')); ?>)</abbr> <abbr title="<?php echo e(Session::get('ad_dep_name')); ?>">(<?php echo e(Session::get('ad_dep_abbr')); ?>)</abbr></small> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu"> 
                            <li><a href="<?php echo e(URL::to('/profile')); ?>" title="Profile"><span class="fa fa-archive"></span> Profile</a></li>
                            <li class="divider"></li>
                        </ul> 
                    </li>-->

                </ul> <!-- / #level 1 nav -->
            </div> <!-- / #outter wrapper -->
        </div>
    </nav> <!-- / #nav wrapper -->

    <div class="container-fluid">
    <?php echo $__env->yieldContent('content'); ?>
    </div>

<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>