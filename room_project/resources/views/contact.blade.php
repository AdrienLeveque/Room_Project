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
  					<a class="navbar-brand" href="#">Utilisateur non enregistré: </a>
  				</div>
		        <div class="container-fluid">
		          <ul class="nav navbar-nav">
		            <li> <a href="accueil">Accueil</a> </li>
		            <li> <a href="connexion">Connexion</a></li>
		            <li> <a href="comment_ca_marche">Comment ça marche</a> </li>
		            <li class="active"> <a href="contact">Contact</a> </li>
		          </ul>
		        </div>
		     </nav>

		     <img src="images/t1.jpg" class="img-responsive" alt="Responsive image" width="1140px"> </br>
		</div>

		<div class="container">
			<div class="col-md-6"> 
				<fieldset>
					<legend>Information à propos de la Mairie</legend>
				</fieldset>
				<div class="col-md-12">
	 				<label>Adresse :</label>
	 				<address>
						  1355 Market Street, Suite 900<br>
						  San Francisco, CA 94103<br>
						  <abbr title="Phone">P:</abbr> (123) 456-7890
					</address>
	 			</div>
	 			<div class="col-md-12">
	 				<label>Téléphone:</label>
	 			</div>
	 			<div class="col-md-12">
	 				<label>Couriel:</label>
	 			</div>
			</div>

			<div class="col-md-6"> 
				<fieldset>
					<legend>Horaire d'ouverture</legend>
				</fieldset>
				<div class="col-md-12">
	 				<label>Lundi:</label>
	 			</div>
	 			<div class="col-md-12">
	 				<label>Mardi:</label>
	 			</div>
	 			<div class="col-md-12">
	 				<label>Mercredi:</label>
	 			</div>
	 			<div class="col-md-12">
	 				<label>Jeudi:</label>
	 			</div>	
	 			<div class="col-md-12">
	 				<label>Vendredi:</label>
	 			</div>	
	 			<div class="col-md-12">
	 				<label>Samedi:</label>
	 			</div>	
	 			<div class="col-md-12">
	 				<label>Dimanche:</label>
	 			</div>		 				 				 				 							
			</div>
		</div>
@stop