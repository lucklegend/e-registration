<?php $__env->startSection('content'); ?>
<?php if(strlen($msg) > 0): ?>
<script>
	webView.showToast("<?php echo e($msg); ?>");
</script>
<?php endif; ?>
<?php echo Form::model($row, ['id' => 'eval-form', 'name' => 'eval-form', 'url' => URL::to('evaluate/save'), 'class' => 'form', 'role' => 'form', 'autocomplete' => 'off']); ?>

<div class="row">
	<div class="col-sm-8">

		<!--
		***************************************************************************************************************************
		-->
		<div class="row">
			<div class="row q-item">
				<h4 class="q-question">Is this your first time to attend this event?</h4>
			</div>
			<div class="row">
				<label class="eval-firsttime-label" for="eval-firsttime-yes" title="YES">
					<img class="img-responsive" src="<?php echo e(asset('images/1_yes.png')); ?>" alt="YES">
				</label>
				<?php echo Form::radio('eval_firsttime', '1', NULL, ['id' => 'eval-firsttime-yes']); ?>

				<label class="eval-firsttime-label" for="eval-firsttime-no" title="NO">
					<img class="img-responsive" src="<?php echo e(asset('images/2_no.png')); ?>" alt="NO">
				</label>
				<?php echo Form::radio('eval_firsttime', '0', NULL, ['id' => 'eval-firsttime-no']); ?>

			</div>
			<br>
		</div>

		<!--
		***************************************************************************************************************************
		-->

		<div class="row">
			<div class="row q-item">
				<h4 class="q-question">How did you learn about this event?</h4>
			</div>
			<div class="row">
				<label class="eval-ref-label" for="eval_ref_1">
					<img class="img-responsive" src="<?php echo e(asset('images/1_radio.png')); ?>" alt="RADIO">
				</label>
				<?php echo Form::checkbox('eval-ref[]', '1', NULL, ['id' => 'eval_ref_1']); ?>

				<label class="eval-ref-label" for="eval_ref_2">
					<img class="img-responsive" src="<?php echo e(asset('images/2_tv.png')); ?>" alt="TV">
				</label>
				<?php echo Form::checkbox('eval-ref[]', '2', NULL, ['id' => 'eval_ref_2']); ?>

				<label class="eval-ref-label" for="eval_ref_3">
					<img class="img-responsive" src="<?php echo e(asset('images/3_news.png')); ?>" alt="NEWSPAPER">
				</label>
				<?php echo Form::checkbox('eval-ref[]', '3', NULL, ['id' => 'eval_ref_3']); ?>

				<label class="eval-ref-label" for="eval_ref_4">
					<img class="img-responsive" src="<?php echo e(asset('images/4_internet.png')); ?>" alt="INTERNET">
				</label>
				<?php echo Form::checkbox('eval-ref[]', '4', NULL, ['id' => 'eval_ref_4']); ?>

				<label class="eval-ref-label" for="eval_ref_5">
					<img class="img-responsive" src="<?php echo e(asset('images/5_school.png')); ?>" alt="SCHOOL">
				</label>
				<?php echo Form::checkbox('eval-ref[]', '5', NULL, ['id' => 'eval_ref_5']); ?>

				<label class="eval-ref-label" for="eval_ref_6">
					<img class="img-responsive" src="<?php echo e(asset('images/6_office.png')); ?>" alt="OFFICE">
				</label>
				<?php echo Form::checkbox('eval-ref[]', '6', NULL, ['id' => 'eval_ref_6']); ?>

				<label class="eval-ref-label" for="eval_ref_7">
					<img class="img-responsive" src="<?php echo e(asset('images/7_mail.png')); ?>" alt="INVITATION">
				</label>
				<?php echo Form::checkbox('eval-ref[]', '7', NULL, ['id' => 'eval_ref_7']); ?>

				<label class="eval-ref-label" for="eval_ref_8">
					<img class="img-responsive" src="<?php echo e(asset('images/8_referral.png')); ?>" alt="REFERRAL">
				</label>
				<?php echo Form::checkbox('eval-ref[]', '8', NULL, ['id' => 'eval_ref_8']); ?>

			</div>
			<br>
		</div>

		<!--
		***************************************************************************************************************************
		-->

		<div class="row">
			<div class="row q-item">
				<h4 class="q-question">What is your overall rating of the event?</h4>
			</div>
			<div class="row">
				<label class="eval-rate-label" for="eval-rate-5" title="Very Satisfied">
					<img class="img-responsive" src="<?php echo e(asset('images/star_5.png')); ?>" alt="Very Satisfied">
				</label>
				<?php echo Form::radio('eval_rating_overall', '5', NULL, ['id' => 'eval-rate-5']); ?>

				<label class="eval-rate-label" for="eval-rate-4" title="Satisfied">
					<img class="img-responsive" src="<?php echo e(asset('images/star_4.png')); ?>" alt="Satisfied">
				</label>
				<?php echo Form::radio('eval_rating_overall', '4', NULL, ['id' => 'eval-rate-4']); ?>

				<label class="eval-rate-label" for="eval-rate-3" title="Neither Satisfied Nor Dissatisfied">
					<img class="img-responsive" src="<?php echo e(asset('images/star_3.png')); ?>" alt="Neither Satisfied Nor Dissatisfied">
				</label>
				<?php echo Form::radio('eval_rating_overall', '3', NULL, ['id' => 'eval-rate-3']); ?>

				<label class="eval-rate-label" for="eval-rate-2" title="Dissatisfied">
					<img class="img-responsive" src="<?php echo e(asset('images/star_2.png')); ?>" alt="Dissatisfied">
				</label>
				<?php echo Form::radio('eval_rating_overall', '2', NULL, ['id' => 'eval-rate-2']); ?>

				<label class="eval-rate-label" for="eval-rate-1" title="Very Dissatisfied">
					<img class="img-responsive" src="<?php echo e(asset('images/star_1.png')); ?>" alt="Very Dissatisfied">
				</label>
				<?php echo Form::radio('eval_rating_overall', '1', NULL, ['id' => 'eval-rate-1']); ?>

			</div>
			<br>
		</div>

		<!--
		***************************************************************************************************************************
		-->

	</div>

	<div class="col-sm-4">
		<img class="img-responsive" src="<?php echo e(asset('images/sipagfiesta.png')); ?>">
	</div>
</div>

<div class="row">
	<div class="col-sm-8">
		<?php echo Form::submit('Continue' , ['class'=>'btn btn-default btn-block']); ?>

	</div>
	<div class="col-sm-4">
		
	</div>
</div>
	 // Form::hidden('barcode-eval', $barcode) 
	 // Form::hidden('event_id', $event->event_id) 

<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.eval_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>