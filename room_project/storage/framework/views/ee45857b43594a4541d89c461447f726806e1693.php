<?php $__env->startSection('contenu'); ?>		
<!-- Titre -->
	 <div class="container">
	 	  <div class="col-md-offset-3">
			<h1><strong> Reservation de votre salle en ligne</strong></h1>
		</div>
	</div>
	</br>

<!-- Barre de navigation -->
		<div class="container">
		    <nav class="navbar navbar-default">
		      	<div class="navbar-header">
  					<a class="navbar-brand" href="#">Utilisateur non enregistré: </a>
  				</div>
		        <div class="container-fluid">
		          <ul class="nav navbar-nav">
		            <li> <a href="accueil">Accueil</a> </li>
		            <li class="active"> <a href="connexion">Connexion</a></li>
		            <li> <a href="comment_ca_marche">Comment ça marche</a> </li>
		            <li> <a href="contact">Contact</a> </li>
		          </ul>
		        </div>
		     </nav>
		</div>

		<div class="container">
			<div class="col-sm-6 col-md-6 col-ms-offset-3 col-md-offset-3"> 
				<fieldset>
					<legend>Connexion</legend>

					<div class="panel panel-info">
						<div class="panel-body"> 
							<?php echo Form::open(['url' => 'accueil']); ?>

								<div class="form-group <?php echo $errors->has('identifiant') ? 'has-error' : ''; ?>">
								<label>Identifiant: </label>
									<?php echo Form::text('identifiant', null, ['class' => 'form-control', 'placeholder' => 'Votre identifiant']); ?>

									<?php echo $errors->first('identifiant', '<small class="help-block">:message</small>'); ?>

								</div>
								<div class="form-group <?php echo $errors->has('mdp') ? 'has-error' : ''; ?>">
								<div class="col-md-12">
									<label>Mot de passe: </label>
								</div>
									<input type="password" class="form-control" name="password">

									<?php if($errors->has('password')): ?>
										<span class="help-block">
											<strong><?php echo e($errors->first('password')); ?></strong>
										</span>
									<?php endif; ?>
								</div>
								<?php echo Form::submit('Connexion !', ['class' => 'btn btn-primary']); ?>

								<a class="btn btn-primary" href="inscription" role="button">S'inscrire</a>
							<?php echo Form::close(); ?>

						</div>
					</div>
					
					<div class="col-md-12"> 
	    				 <ul>
	    				 	</br>
							<li><a href="inscription.php">S'inscrire</a></li>
						 	<li><a href="#">Mot de passe oublié</a></li>
	    				</ul>
	    			</div> 

				</fieldset>
			</div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>