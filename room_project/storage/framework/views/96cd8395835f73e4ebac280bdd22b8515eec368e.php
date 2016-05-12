<?php $__env->startSection('contenu'); ?>
<!-- Titre -->
<meta http-equiv="content_type" content="text/html";  charset="utf-8" />
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
  					<a class="navbar-brand" href="#">Client: </a>
  				</div>
		        <div class="container-fluid">
		          <ul class="nav navbar-nav">
		            <li> <a href="client_accueil">Accueil</a> </li>
		            <li> <a href="consulter_salles">Consulter les salles</a></li>
		            <li> <a href="client_reservation">Mes reservations</a> </li>
		            <li class="active"> <a href="client_compte">Mon compte</a> </li>
		            <li> <a href="client_contact">Contact</a> </li>
		          </ul>
		        </div>
		     </nav>
		</div>

		<div class="container">
			<div class="row"> 
				<div class="col-md-offset-1 col-md-2">
					<h1><span class="glyphicon glyphicon-user"></span></h1>
				</div>
				<div class="col-md-6">
					<legend>Informations personnelles</legend>
					
					<form class="form-horizontal padding no-margin-bottom">
						<blockquote>
						<div class="form-group">
							<label for="inputNom" class="col-md-3 control-label">Nom</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="inputNom" placeholder="Nom">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPrenom" class="col-md-3 control-label">PrÃ©nom</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="inputPrenom" placeholder="PrÃ©nom">
							</div>
						</div>
						<div class="form-group">
							<label for="inputE-mail" class="col-md-3 control-label">E-mail</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="inputE-mail" placeholder="E-mail">
							</div>
						</div>
						<div class="form-group">
							<label for="inputTÃ©lÃ©phone" class="col-md-3 control-label">TÃ©lÃ©phone</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="inputTÃ©lÃ©phone" placeholder="TÃ©lÃ©phone">
							</div>
						</div>
						<div class="form-group">
							<label for="inputDate_de_naissance" class="col-md-3 control-label">Date de naissance</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="inputDate_de_naissance" placeholder="Date de naissance">
							</div>
						</div>
						<div class="form-group">
							<label for="inputAdresse" class="col-md-3 control-label">Adresse</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="inputAdresse" placeholder="Adresse">
							</div>
						</div>
						</blockquote>
					</form>
				
				</div>
			</div>
		</div>
		<div class="container">
			<nav class="navbar navbar-default">
			</nav>
		</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_client', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>