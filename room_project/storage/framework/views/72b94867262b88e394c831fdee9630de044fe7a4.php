<?php $__env->startSection('contenu'); ?>
    <br>
    <div class="col-sm-offset-4 col-sm-4">
		<div class="panel panel-info">
			<div class="panel-heading">Inscription à la lettre d'information</div>
			<div class="panel-body"> 
				<?php echo Form::open(['route' => 'storeEmail']); ?>

					<div class="form-group <?php echo $errors->has('email') ? 'has-error' : ''; ?>">
						<?php echo Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Entrez votre email')); ?>

						<?php echo $errors->first('email', '<small class="help-block">:message</small>'); ?>

					</div>
					<?php echo Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']); ?>

				<?php echo Form::close(); ?>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_inscription', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>