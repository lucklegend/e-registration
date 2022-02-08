			<?php

				$batch = str_pad($row->vis_batch.'',6,'0', STR_PAD_LEFT);
				$serial = str_pad($row->vis_serial.'',6,'0', STR_PAD_LEFT);

			?>
			<tr>
				<td class="nowrap text-left">
					<a class="btn btn-primary btn-xs" href="<?php echo e(URL::to('/visitors/'.$row->vis_id.'/edit')); ?>" title="Edit" role="button"><span class="fa fa-pencil"></span></a>
					<a class="btn btn-warning btn-xs" href="javascript:void(0);" onclick="confirmDialog('Delete this item?', 'Confirm Delete', '<?php echo e(URL::to('/visitors/'.$row->vis_id.'/delete')); ?>');" title="Delete" role="button"><span class="fa fa-minus"></span></a>
				</td>
				<td class="text-center"><?php echo e($i); ?></td>
				<td><?php echo e($batch.$serial); ?></td>
				<td><?php echo e($row->vis_name); ?></td>
				<td><?php echo e($row->gender_name); ?></td>
				<td><?php echo e($row->vis_company); ?></td>
				<td><?php echo e($row->vis_gsm); ?></td>
				<td><?php echo e($row->vis_email); ?></td>
				<td><?php echo e($row->region_name); ?></td>
				<td><?php echo e($row->class_name); ?></td>
				<td><?php echo e($row->event_title); ?></td>
				<td><?php echo e($row->created_at); ?></td>
			</tr>
