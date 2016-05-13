<?php $__env->startSection('accueil'); ?>  <?php $__env->stopSection(); ?>

<?php $__env->startSection('a_propos'); ?>  <?php $__env->stopSection(); ?>  

<?php $__env->startSection('contact'); ?> class="active" <?php $__env->stopSection(); ?>

<?php $__env->startSection('client_consulter_salles'); ?>  <?php $__env->stopSection(); ?>

<?php $__env->startSection('connexion'); ?>  <?php $__env->stopSection(); ?>

<?php $__env->startSection('inscription'); ?>  <?php $__env->stopSection(); ?>

<?php $__env->startSection('deconnection'); ?>  <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>	
<!-- Titre -->
	 <div class="container">
	</br>	     
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">Contactez-moi</div>
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
					<?php echo Form::submit('Envoyer !', ['class' => 'btn btn-primary pull-right']); ?>

				<?php echo Form::close(); ?>

			</div>
		</div>
	</div>		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>