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
  					<a class="navbar-brand" href="#">Client: </a>
  				</div>
		        <div class="container-fluid">
		          <ul class="nav navbar-nav">
		            <li class="active"> <a href="client_accueil">Accueil</a> </li>
		            <li> <a href="client_consulter_salles">Consulter les salles</a></li>
		            <li> <a href="client_reservation">Mes reservations</a> </li>
		            <li> <a href="client_compte">Mon compte</a> </li>
		            <li> <a href="client_contact">Contact</a> </li>
		          </ul>
		        </div>
		     </nav>
		</div>

		<div class="container">
			<div class="col-md-6"> 

<button type="button" class="btn btn-default btn-sm">Créer une reservation</button>

			</div>
		</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_client', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>