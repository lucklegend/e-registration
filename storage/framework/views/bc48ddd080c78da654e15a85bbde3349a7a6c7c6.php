<?php $__env->startSection('content'); ?>
<?php
$ctr = 0;
?>
<h3>Visitors</h3>
<table class="table table-striped table-hover table-condensed table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th class="text-center">Barcode</th>
			<th class="text-center">Name</th>
			<th class="text-center">Gender</th>
			<th class="text-center">Age</th>
			<th class="text-center">Civil Status</th>
			<th class="text-center">Company</th>
			<th class="text-center">Mobile</th>
			<th class="text-center">Email</th>
			<th class="text-center">Region</th>
			<th class="text-center">Classification</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($rows as $row): ?>
		<?php $ctr++; ?>
		<tr>
			<td><?php echo e($ctr); ?></td>
			<td><?php echo e($row->vis_code); ?></td>
			<td><?php echo e($row->vis_lname); ?>, <?php echo e($row->vis_fname); ?> <?php echo e($row->vis_mname); ?></td>
			<td><?php echo e($row->gender_name); ?></td>
			<td><?php echo e($row->vis_age); ?></td>
			<td><?php echo e($row->civil_name); ?></td>
			<td><?php echo e($row->vis_company); ?></td>
			<td><?php echo e($row->vis_email); ?></td>
			<td><?php echo e($row->vis_gsm); ?></td>
			<td><?php echo e($row->region_name); ?></td>
			<td><?php echo e($row->class_name); ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.print', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>