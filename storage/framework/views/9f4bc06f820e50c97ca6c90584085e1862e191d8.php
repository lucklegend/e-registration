<?php $__env->startSection('content'); ?>
<?php if(strlen($msg) > 0): ?>
<script>
	webView.showToast("<?php echo e($msg); ?>");
</script>
<?php endif; ?>

<div class="text-center">
	<h3>
		There are no active events taking place at this time.
		<br>
		Please try again later...
	</h3>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.ereg_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>