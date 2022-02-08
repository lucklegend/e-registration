<?php $__env->startSection('content'); ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="clearfix">
				<h3 class="panel-title pull-left">Events</h3>
				<div class="pull-right">
					<a class="btn btn-success btn-xs" href="<?php echo e(URL::to('/events/add')); ?>" title="Add Item" role="button"><span class="fa fa-plus"></span> Add Item</a>
				</div>
			</div>
		</div>
		<div class="table-responsive">
			<table id="grid_table" class="table table-bordered table-striped table-hover table-condensed tablesorter">
				<thead>
					<tr>
						<th>&nbsp;</th>
						<th>Event Title</th>
						<th>Event Description</th>
						<th>Start</th>
						<th>End</th>
						<th>Active</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($events as $event): ?>
					<tr>
						<td class="nowrap text-left">
							<a class="btn btn-success btn-xs" href="<?php echo e(url('/events/'.$event->event_id.'/edit')); ?>" title="Edit" role="button"><span class="fa fa-pencil"></span></a>
							<a class="btn btn-danger btn-xs" href="<?php echo e(url('/events/'.$event->event_id.'/delete')); ?>" title="Delete" role="button"><span class="fa fa-times"></span></a>
						</td>
						<td><?php echo e($event->event_title); ?></td>
						<td><?php echo e($event->event_desc); ?></td>
						<td><?php echo e(Carbon\Carbon::parse($event->event_from)->format('F d, Y')); ?></td>
						<td><?php echo e(Carbon\Carbon::parse($event->event_to)->format('F d, Y')); ?></td>
						<td><?php if($event->event_active == 1): ?> Yes <?php else: ?> No <?php endif; ?></td>
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