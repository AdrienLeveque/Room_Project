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
		            <li> <a href="client_accueil">Accueil</a> </li>
		            <li class="active"> <a href="client_consulter_salles">Consulter les salles</a></li>
		            <li> <a href="client_reservation">Mes reservations</a> </li>
		            <li> <a href="client_compte">Mon compte</a> </li>
		            <li> <a href="client_contact">Contact</a> </li>
		          </ul>
		        </div>
		     </nav>
		</div>

		<div class="container">
			<form action="reservation_paiement.php" method="post">
				<div class="col-md-12">
			<br>
			<section class="row">
				<div class="col-md-12">
				<?php $infosSalle = DB::table('salle')->get();
					foreach($infosSalle as $infosSalle){
					$pathSalle=$infosSalle->image;
					$nomSalle=$infosSalle->nom_salle;
					$capaciteSalle=$infosSalle->capacite_salle;
					$cautionSalle=$infosSalle->caution_salle;
					$idSalle=$infosSalle->id;
					?>
					<div class="col-xs-4 col-md-4">
						<a href="client_reservation_salles?id=<?php echo $idSalle; ?>"> <img src="images/<?php echo $pathSalle ?>" class="img-thumbnail img-responsive center-block" alt="Responsive image" style="margin-bottom: 2%;"></a>
						<label><?php if(!is_null($nomSalle)) echo $nomSalle ?></label>
						<label><?php if(!is_null($capaciteSalle))echo $capaciteSalle ?></label>
						<label><?php if(!is_null($cautionSalle))echo $cautionSalle ?></label>
					</div>
				<?php
					}
				?>
				</div>
			</section>
					</br></br>
				</div>
			</form>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>