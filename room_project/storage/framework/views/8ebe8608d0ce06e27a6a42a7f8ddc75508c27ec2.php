<?php $__env->startSection('contenu'); ?>
    <br>
	<div class="col-sm-offset-4 col-sm-4">
		<div class="panel panel-info">
			<div class="panel-heading">Envoi d'une photo</div>
			<div class="panel-body"> 
				<?php if(session()->has('error')): ?>
					<div class="alert alert-danger"><?php echo session('error'); ?></div>
				<?php endif; ?>
				<?php echo Form::open(['url' => 'photo', 'files' => true]); ?>

					<div class="form-group <?php echo $errors->has('image') ? 'has-error' : ''; ?>">
						<?php echo Form::file('image', ['class' => 'form-control']); ?>

						<?php echo $errors->first('image', '<small class="help-block">:message</small>'); ?>

					</div>
					<?php echo Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']); ?>

				<?php echo Form::close(); ?>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_inscription', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>