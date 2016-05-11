@extends('template_client')

@section('contenu')
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
		            <li  class="active"> <a href="consulter_salles">Consulter les salles</a></li>
		            <li> <a href="client_reservation">Mes reservations</a> </li>
		            <li> <a href="client_compte">Mon compte</a> </li>
		            <li> <a href="client_contact">Contact</a> </li>
		          </ul>
		        </div>
		     </nav>
		</div>

		<div class="container">
			<form action="reservation_formulaire.php" method="post">
				<div class="col-md-12">
					<?php 
						$idSalle=$_GET['id'];
							$infosSalle = DB::table('salle')->where('id', $idSalle)->first(); 
							$nomSalle=$infosSalle->nom_salle;
							$adresseSalle=$infosSalle->adresse_salle;
							$capaciteSalle=$infosSalle->capacite_salle;
							$gardienSalle=$infosSalle->gardien_salle;
							$pathSalle=$infosSalle->image;
					?>
					<div class="col-md-6">  
						<img src="images/<?php echo $pathSalle ?>" class="img-thumbnail img-responsive center-block" alt="Responsive image" style="margin-bottom: 2%;">
					</div> 
					<div class="col-md-6">
						<fieldset>
						
							<legend>Informations</legend>
							<div class="col-md-12"> Salle:<?php if(!is_null($nomSalle)) echo $nomSalle ?></div>
							<div class="col-md-12">Adresse: <?php if(!is_null($adresseSalle)) echo $adresseSalle ?></div>
							<div class="col-md-12">Capacité de la salle: <?php if(!is_null($capaciteSalle)) echo $capaciteSalle ?></div>
							<div class="col-md-12">Gardien sur place: <?php if(!is_null($gardienSalle)) echo $gardienSalle ?></div>

							<fieldset>
								<legend>Matériel dans la salle</legend>
							<?php 
								$infosSalle = DB::table('materiel')->where('id', $idSalle)->first();
							?>
							</fieldset>
						</fieldset>
						

						<hr>
					</div>
					<div class="col-md-12">
						<div class="col-md-offset-3">
							<h2><strong>Selectionner un jour ou une periode disponible</strong></h2>
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-4">
							</br>
							<select class="form-control">
								<option selectcted="selected">Semaine du</option>
							</select>
						</div>
					</div>
					<div class="col-md-12">
					</br></br>
 					<a class="btn btn-primary" href="client_reservation_formulaire" role="button">Etape suivante</a>
					</div>
				</div>
			</form>
		</div>
@stop
