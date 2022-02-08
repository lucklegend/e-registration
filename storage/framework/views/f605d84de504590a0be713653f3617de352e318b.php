<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Evaluation</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/chosen.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/tablesorter/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-datepicker3.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/roboto.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/public.css')); ?>">
</head>
<body>
    <div class="header">
        <div class="container">
            <img src="<?php echo e(asset('images/eval_logo.png')); ?>" class="img-responsive" alt="e-valuate">
        </div>
    </div>
    	<div id="page-wrapper">
		<div id="page-middle">
			<div class="container text-center">
		    	<?php echo $__env->yieldContent('content'); ?>
			</div>
		</div>
	    <div id="push"></div>
	</div>
	
    <div id="footer">
        <div class="container clearfix">
            <img src="<?php echo e(asset('images/dost_footer.png')); ?>" class="img-responsive pull-right" alt="DOST4A">            
            <?php
                $event = \App\Event::where('event_active', 1)->first();
                if ($event){
                    $count = 0;
                    $row = \App\VWRegistrant::where('event_id', $event->event_id)->first();
                    if ($row){
                        $count = $row->vis_count;
                        ?>
            <br>
            <h4 class="text-warning">Total No of Registrants : <?php echo e($count); ?></h4>
                        <?php
                    }
                }
            ?>

        </div>
    </div>


    <script src="<?php echo e(asset('js/jquery-2.1.3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-datepicker.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.tablesorter.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.tablesorter.pager.js')); ?>"></script>
    <script src="<?php echo e(asset('js/chosen.jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
</body>
</html>