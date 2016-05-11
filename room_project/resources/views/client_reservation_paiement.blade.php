@extends('template')

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
			<form action="reservation_paiement.php" method="post">
				<div class="col-md-12">
					<div class="col-md-6">  
						mettre une image
					</div> 
					<div class="col-md-6">
						<fieldset>
							<legend>Informations</legend>
							<div class="col-md-12"> Salle: </div>
							<div class="col-md-12">Adresse: </div>
							<div class="col-md-12">Capacité de la salle:</div>
							<div class="col-md-12">Gardien sur place: </div>
							<div class="col-md-12"></br>
								<select>
									<option selectcted="selected">Matériel</option>
								</select>
							</div>
						</fieldset>
						<hr>
					</div>
					<div class="col-md-12">
						<div class="col-md-4">
							<fieldset>
								<legend> Matériel disponible</legend>
								<label>Enceinte</label></br>
								<label>Table</label></br>
								<label>Chaise</label></br>
							</fieldset>
							</br>
							<fieldset>
								<legend> Matériel loué</legend>
								<label>20 chaises</label>
								<label>5 tables</label>
							</fieldset>
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-7">
							<h4><strong>Vous avez reservé la salle A pour le : </strong></h4>
							<fieldset>
								<legend> Paiement de la caution</legend>
								<label>Type de carte</label></br>
								<label>Numéro de carte</label></br>
								<label>Cryptogramme</label></br>
							</fieldset>
						</div>
					</div>

					<div class="col-md-12">
					</br></br>
 						<a class="btn btn-primary" href="client_reservation_paiement" role="button">Etape suivante</a>
					</div>
				</div>
			</form>
		</div>

@stop
