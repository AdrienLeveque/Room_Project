<?php include("head.php") ?>
<body>	
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
		            <li> <a href="client_accueil.php">Accueil</a> </li>
		            <li  class="active"> <a href="consulter_salles.php">Consulter les salles</a></li>
		            <li> <a href="client_reservation.php">Mes reservations</a> </li>
		            <li> <a href="client_compte.php">Mon compte</a> </li>
		            <li> <a href="contact.php">Contact</a> </li>
		          </ul>
		        </div>
		     </nav>
		</div>

		<div class="container">
			<form action="reservation_formulaire.php" method="post">
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
 						<button type="submit" class="btn btn-default pull-right">Etape suivante</button>
					</div>
				</div>
			</form>
		</div>

</body>
