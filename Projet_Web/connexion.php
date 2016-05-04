<?php include("head_deconnecte.php") ?>
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
  					<a class="navbar-brand" href="#">Utilisateur non enregistré: </a>
  				</div>
		        <div class="container-fluid">
		          <ul class="nav navbar-nav">
		            <li> <a href="Accueil.php">Accueil</a> </li>
		            <li class="active"> <a href="connexion.php">Connexion</a></li>
		            <li> <a href="Inscription.php">Inscription</a> </li>
		            <li> <a href="Comment_ca_marche.php">Comment ça marche</a> </li>
		            <li> <a href="contact.php">Contact</a> </li>
		          </ul>
		        </div>
		     </nav>
		</div>

		<div class="container">
			<div class="col-md-6"> 
				<fieldset>
					<legend>Connexion</legend>
					<div class="col-md-12"> 
						<label>Identifiant: </label>
						<input type="texte" class="form-control" name="connexion_id" id="connexion_id" placeholder="">
						</br>
					</div>

					<div class="col-md-12"> 
						<label>Mot de passe: </label>
						<input type="texte" class="form-control" name="connexion_mdp" id="connexion_mdp" placeholder="">
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

</body>
