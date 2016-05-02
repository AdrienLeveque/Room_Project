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
  					<a class="navbar-brand" href="#">Employé: </a>
  				</div>
		        <div class="container-fluid">
		          <ul class="nav navbar-nav">
		            <li> <a href="employe_accueil.php">Accueil</a> </li>
		            <li> <a href="employe_edt.php">Mon emploi du temps</a></li>
		            <li> <a href="employe_compte.php">Mon compte</a> </li>
		            <li class="active"> <a href="employe_reservation.php">Mes Reservations</a> </li>
		            <li> <a href="contact.php">Contact</a> </li>
		          </ul>
		        </div>
		     </nav>
		</div>

		<div class="container">
			<div class="col-md-6"> 

			</div>
			<div class="col-md-6"> 
				<fieldset>
					<legend>Informations</legend>
					<div class="col-md-12">
						<label>Salle:</label>
					</div>
					<div class="col-md-12">
						<label>Adresse</label>
					</div>  
					<div class="col-md-12">
						<label>Capacité de la salle: </label>
					</div> 
					<div class="col-md-12">:
						<label>Gardien sur place:</label>
					</div> 
					<div class="col-md-6">
					<select name="select" id="select" class="form-control">
						<option>1</option>
						<option>2</option>
						<option>3</option>
					</select>
					</div>

				</fieldset>
			</div>
			
			<div class="col-md-12"> </br> </br></div>
	 	 	<div class="col-md-offset-3">
				<h1><strong> Reservation du Client X du ... au ... </strong></h1>
			</div>

<!-- Etats des lieux -->
			<div class="col-md-6"> 
				<fieldset>
					<legend>Etats des lieux</legend>
	
				<div class="col-md-12">
					<label>Salle abimé: 	</label>
			
						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Oui
						</label>
						<label class="radio-inline">
						  	<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Non
						</label>												
	 			</div>
	 			<div class="col-md-12">
	 				<fieldset>
	 					<div class="col-md-12">
		 					<legend>Materiél loué</legend>
		 					<div class="col-md-4">
		 						<label>Chaise</label>
		 					</div>
		 					<div class="col-md-2">
		 						 <input type="texte" class="form-control" name="" id="" placeholder="">
		 					</div>
		 					<div class="col-md-6">
		 						 <label>abimées/20</label>
		 					</div>
	 					</div>

						<div class="col-md-12">
		 					<div class="col-md-4">
		 						<label>tables</label>
		 					</div>
		 					<div class="col-md-2">
		 						 <input type="texte" class="form-control" name="" id="" placeholder="">
		 					</div>
		 					<div class="col-md-6">
		 						 <label>abimées/5</label>
		 					</div>
						</div>
					</fieldset>
	 				</fieldset>
	 			</div>
		

<!-- Clefs -->
			<div class="col-md-6"> 
				<fieldset>
					<legend>Clefs</legend>
				</fieldset>
				<div class="col-md-12">
	 				<label>Etat des clefs: </label>
	 			</div>
	 			<div class="col-md-12">
	 				<label>Les clefs ont été rendu:</label>
	 				<label class="radio-inline2">
						<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1"> Oui
					</label>
					<label class="radio-inline2">
						  <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option2"> Non
					</label>	
	 			</div>

		 		<button type="submit" class="pull-right">Valider</button>		 				 				 							
			</div>

		</div>

</body>
