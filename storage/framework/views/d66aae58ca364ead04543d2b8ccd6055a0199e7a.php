<?php $__env->startSection('content'); ?>
<?php

?>
	<div class="panel panel-default">
		<div class="panel-heading clearfix">
			<div class="pull-left"><h3 class="panel-title">Visitors (<?php echo e($option); ?>)</h3></div>
		</div>

		<div class="panel-body">
		<?php if($option == 'Add'): ?>
		<?php echo Form::open(['url' => 'visitors/save', 'autocomplete' => 'off', 'method' => 'POST']); ?>

		<?php echo Form::hidden('option', 'Save'); ?>

		<?php elseif($option == 'Edit'): ?>
		<?php echo Form::open(['url' => 'visitors/save', 'autocomplete' => 'off', 'method' => 'POST']); ?>

		<?php echo Form::hidden('option', 'Edit'); ?>

		<?php echo Form::hidden('vis_id', $visitor->vis_id); ?>

		<?php endif; ?>
			<div class="form-group">
				<?php if($option == 'Add'): ?>
					<?php echo Form::label('Event', 'Event:', ['class' => 'control-label']); ?>

					<?php echo Form::select('event_id', $events, NULL, ['class' => 'form-control input-sm', 'required']); ?>

				<?php elseif($option == 'Edit'): ?>
					<?php echo Form::label('Event', 'Event:', ['class' => 'control-label']); ?>

					<?php echo Form::select('event_id', $events, $visitor->event_id, ['class' => 'form-control input-sm', 'required']); ?>

				<?php endif; ?>
			</div>

			<div class="form-group">
				<?php if($option == 'Add'): ?>
					<?php echo Form::label('Visitor Code', 'Visitor Code:', ['class' => 'control-label']); ?>

					<?php echo Form::text('vis_code', $barcode, ['class' => 'form-control input-sm', 'required', 'maxlength' => '255']); ?>

				<?php elseif($option == 'Edit'): ?>
					<?php echo Form::label('Visitor Code', 'Visitor Code:', ['class' => 'control-label']); ?>

					<?php echo Form::text('vis_code', $visitor->vis_code, ['class' => 'form-control input-sm', 'required', 'maxlength' => '255']); ?>

				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php if($option == 'Add'): ?>
					<?php echo Form::label('First Name', 'First Name:', ['class' => 'control-label']); ?>

					<?php echo Form::text('vis_fname', NULL, ['class' => 'form-control input-sm', 'required']); ?>

				<?php elseif($option == 'Edit'): ?>
					<?php echo Form::label('First Name', 'First Name:', ['class' => 'control-label']); ?>

					<?php echo Form::text('vis_fname', $visitor->vis_fname, ['class' => 'form-control input-sm', 'required']); ?>

				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php if($option == 'Add'): ?>
					<?php echo Form::label('Middle Name', 'Middle Name:', ['class' => 'control-label']); ?>

					<?php echo Form::text('vis_mname', NULL, ['class' => 'form-control input-sm', 'required']); ?>

				<?php elseif($option == 'Edit'): ?>
					<?php echo Form::label('Middle Name', 'Middle Name:', ['class' => 'control-label']); ?>

					<?php echo Form::text('vis_mname', $visitor->vis_mname, ['class' => 'form-control input-sm', 'required']); ?>

				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php if($option == 'Add'): ?>
					<?php echo Form::label('Last Name', 'Last Name:', ['class' => 'control-label']); ?>

					<?php echo Form::text('vis_lname', NULL, ['class' => 'form-control input-sm', 'required']); ?>

				<?php elseif($option == 'Edit'): ?>
					<?php echo Form::label('Last Name', 'Last Name:', ['class' => 'control-label']); ?>

					<?php echo Form::text('vis_lname', $visitor->vis_lname, ['class' => 'form-control input-sm', 'required']); ?>

				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php if($option == 'Add'): ?>
					<?php echo Form::label('Email', 'Email:', ['class' => 'control-label']); ?>

					<?php echo Form::text('vis_email', NULL, ['class' => 'form-control input-sm']); ?>

				<?php elseif($option == 'Edit'): ?>
					<?php echo Form::label('Email', 'Email:', ['class' => 'control-label']); ?>

					<?php echo Form::text('vis_email', $visitor->vis_email, ['class' => 'form-control input-sm']); ?>

				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php if($option == 'Add'): ?>
					<?php echo Form::label('Mobile', 'Mobile:', ['class' => 'control-label']); ?>

					<?php echo Form::text('vis_gsm', NULL, ['class' => 'form-control input-sm']); ?>

				<?php elseif($option == 'Edit'): ?>
					<?php echo Form::label('Mobile', 'Mobile:', ['class' => 'control-label']); ?>

					<?php echo Form::text('vis_gsm', $visitor->vis_gsm, ['class' => 'form-control input-sm']); ?>

				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php if($option == 'Add'): ?>
					<?php echo Form::label('Age', 'Age:', ['class' => 'control-label']); ?>

					<?php echo Form::text('vis_age', NULL, ['class' => 'form-control input-sm', 'required']); ?>

				<?php elseif($option == 'Edit'): ?>
					<?php echo Form::label('Age', 'Age:', ['class' => 'control-label']); ?>

					<?php echo Form::text('vis_age', $visitor->vis_age, ['class' => 'form-control input-sm', 'required']); ?>

				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php if($option == 'Add'): ?>
					<?php echo Form::label('Gender', 'Gender:', ['class' => 'control-label']); ?>

					<?php echo Form::select('vis_gender', $gender, NULL, ['class' => 'form-control input-sm']); ?>

				<?php elseif($option == 'Edit'): ?>
					<?php echo Form::label('Gender', 'Gender:', ['class' => 'control-label']); ?>

					<?php echo Form::select('vis_gender', $gender, $visitor->gender_id, ['class' => 'form-control input-sm']); ?>

				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php if($option == 'Add'): ?>
					<?php echo Form::label('Civil Status', 'Civil Status:', ['class' => 'control-label']); ?>

					<?php echo Form::select('civil_id', $status, NULL, ['class' => 'form-control input-sm']); ?>

				<?php elseif($option == 'Edit'): ?>
					<?php echo Form::label('Civil Status', 'Civil Status:', ['class' => 'control-label']); ?>

					<?php echo Form::select('civil_id', $status, $visitor->civil_id, ['class' => 'form-control input-sm']); ?>

				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php if($option == 'Add'): ?>
					<?php echo Form::label('Region', 'Region:', ['class' => 'control-label']); ?>

					<?php echo Form::select('region_id', $region, NULL, ['class' => 'form-control input-sm', 'required']); ?>

				<?php elseif($option == 'Edit'): ?>
					<?php echo Form::label('Region', 'Region:', ['class' => 'control-label']); ?>

					<?php echo Form::select('region_id', $region, $visitor->region_id, ['class' => 'form-control input-sm', 'required']); ?>

				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php if($option == 'Add'): ?>
					<?php echo Form::label('Classification', 'Classification:', ['class' => 'control-label']); ?>

					<?php echo Form::select('class_id', $classification, NULL, ['class' => 'form-control input-sm']); ?>

				<?php elseif($option == 'Edit'): ?>
					<?php echo Form::label('Classification', 'Classification:', ['class' => 'control-label']); ?>

					<?php echo Form::select('class_id', $classification, $visitor->class_id, ['class' => 'form-control input-sm']); ?>

				<?php endif; ?>
			</div>
			<div class="form-group">
				<?php echo Form::label('Company', 'Company:', ['class' => 'control-label']); ?>

				<?php echo Form::text('vis_company', NULL, ['class' => 'form-control input-sm']); ?>

			</div>

			<div class="form-group">
				<?php if($option == 'Add'): ?>
					<?php echo Form::button('<span class="fa fa-check"></span> Save', ['type' => 'submit', 'class' => 'btn btn-primary btn-sm']); ?>

					<a class="btn btn-primary btn-sm" href="<?php echo e(url('visitors')); ?>"><span class="fa fa-arrow-circle-left"></span> Cancel</a>
				<?php elseif($option == 'Edit'): ?>
					<?php echo Form::button('<span class="fa fa-check"></span> Update', ['type' => 'submit', 'class' => 'btn btn-primary btn-sm']); ?>

					<a class="btn btn-primary btn-sm" href="<?php echo e(url('visitors')); ?>"><span class="fa fa-arrow-circle-left"></span> Cancel</a>
				<?php endif; ?>
			</div>
		<?php echo Form::close(); ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>