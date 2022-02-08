<?php $__env->startSection('content'); ?>
	<?php
		$ctr = 0;
	?>			
		<div class="panel-heading">
			<div class="clearfix">
				<h3 class="panel-title pull-left">Visitors</h3>
				<div class="pull-right">
					<a class="btn btn-success btn-xs" href="<?php echo e(URL::to('/visitors/add')); ?>" title="Add Item" role="button"><span class="fa fa-plus"></span> Add Item</a>
				</div>
			</div>
		</div>
		<!-- <div class="table-responsive">
			<table id="grid_table" class="table table-bordered table-striped table-hover table-condensed tablesorter">
				<thead>
					<tr>
						<th>Student/Academe</th>
						<th>Business/Entrepreneur</th>
						<th>Government Employee</th>
						<th>Private Organization</th>
						<th>Homemakers</th>
						<th>Media</th>
						<th>Others</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo e(App\Visitor::where('class_id', 5)->count()); ?></td>
						<td><?php echo e(App\Visitor::where('class_id', 5)->count()); ?></td>
						<td><?php echo e(App\Visitor::where('class_id', 5)->count()); ?></td>
						<td><?php echo e(App\Visitor::where('class_id', 5)->count()); ?></td>
						<td><?php echo e(App\Visitor::where('class_id', 5)->count()); ?></td>
						<td><?php echo e(App\Visitor::where('class_id', 5)->count()); ?></td>
						<td><?php echo e(App\Visitor::where('class_id', 5)->count()); ?></td>
					</tr>
				</tbody>
			</table>
		</div> -->

		<div class="table-responsive">
			<table id="grid_table" class="table table-bordered table-striped table-hover table-condensed tablesorter">
				<thead>
					<tr>
						<th>&nbsp</th>
						<th>#</th>
						<th>Event</th>
						<th>Visitor Name</th>
						<th>Barcode</th>
						<th>Company</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Civil Status</th>
						<th>Region</th>
						<th>Classification</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($visitors as $visitor): ?>
					<?php 
					$ctr++;
					?>
					<tr>
						<td class="nowrap text-left">
							<a class="btn btn-success btn-xs" href="<?php echo e(url('/visitor/edit/'.$visitor->vis_id)); ?>" title="Edit" role="button"><span class="fa fa-pencil"></span></a>
							<a class="btn btn-danger btn-xs" href="<?php echo e(url('/visitor/delete/'.$visitor->vis_id)); ?>" title="Delete" role="button"><span class="fa fa-times"></span></a>
						</td>
						<td><?php echo e($ctr); ?></td>
						<td><?php echo e($visitor->event_title); ?></td>
						<td><?php echo e($visitor->vis_lname); ?>, <?php echo e(strtoupper($visitor->vis_fname)); ?> <?php echo e($visitor->vis_mname); ?></td>
						<td><?php echo e($visitor->vis_code); ?></td>
						<td><?php echo e($visitor->vis_company); ?></td>
						<td><?php echo e($visitor->vis_email); ?></td>
						<td><?php echo e($visitor->vis_gsm); ?></td>
						<td><?php echo e($visitor->vis_age); ?></td>
						<td><?php echo e($visitor->gender_name); ?></td>
						<td><?php echo e($visitor->civil_name); ?></td>
						<td><?php echo e($visitor->region_name); ?></td>
						<td><?php echo e($visitor->class_name); ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<script type="text/javascript">
		var _tsOptions = {
			headers:{
				0: { sorter: false },
				}
		};
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>