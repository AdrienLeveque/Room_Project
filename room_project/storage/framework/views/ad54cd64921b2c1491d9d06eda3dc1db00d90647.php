<?php $__env->startSection('contenu'); ?>
    <br>
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			<div class="panel-heading">Inscription à la lettre d'information</div>
			<div class="panel-body"> 
				Merci. Votre adresse a bien été prise en compte.
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template_inscription', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>