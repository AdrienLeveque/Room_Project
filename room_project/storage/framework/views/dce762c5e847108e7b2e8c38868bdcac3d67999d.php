<?php $__env->startSection('contenu'); ?>
    <br>
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			<div class="panel-heading">Contactez-moi</div>
			</br>
			<div class="panel-body"> 
				<?php echo Form::open(['url' => 'contact']); ?>

					<div class="form-group <?php echo $errors->has('nom') ? 'has-error' : ''; ?>">
						<?php echo Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']); ?>

						<?php echo $errors->first('nom', '<small class="help-block">:message</small>'); ?>

					</div>
					<div class="form-group <?php echo $errors->has('email') ? 'has-error' : ''; ?>">
						<?php echo Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']); ?>

						<?php echo $errors->first('email', '<small class="help-block">:message</small>'); ?>

					</div>
					<div class="form-group <?php echo $errors->has('texte') ? 'has-error' : ''; ?>">
						<?php echo Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']); ?>

						<?php echo $errors->first('texte', '<small class="help-block">:message</small>'); ?>

					</div>
					<?php echo Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']); ?>

				<?php echo Form::close(); ?>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_inscription', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>