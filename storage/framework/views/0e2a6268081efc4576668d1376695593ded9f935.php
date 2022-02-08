			<?php

				$batch = str_pad($row->vis_batch.'',6,'0', STR_PAD_LEFT);
				$serial = str_pad($row->vis_serial.'',6,'0', STR_PAD_LEFT);

			?>
			<tr>
				<td class="text-center"><?php echo e($i); ?></td>
				<td><?php echo e($row->vis_code); ?></td>
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
