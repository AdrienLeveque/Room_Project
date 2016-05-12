@extends('layouts.app')

@section('accueil')  @endsection

@section('a_propos') class="active" @endsection  

@section('contact')  @endsection

@section('connexion')  @endsection

@section('inscription')  @endsection

@section('deconnection')  @endsection


@section('content')
<!-- Titre -->
	 <div class="container">
	</br>
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
						<!--
							<?php 
								$Lundi = DB::table('horaire')->where('jour','lundi')->first();
								if (is_null($Lundi)) { echo "Ferme";} else {
									echo $Lundi->date_debut."h - ".$Lundi->date_fin."h";
								}
							?>
						-->
	 			<div class="col-md-12">
					<?php 
						$az = DB::table('horaire')->get();
						foreach($az as $az){
					?><div class="col-md-3">
						<strong> <?php echo $az->jour.": ";?> </strong> <?php
					?></div>
					  <div class="col-md-4">
					<?php 
						if (($az->date_debut)==0||is_null($az->date_debut)) { echo "Ferme";} else {
						echo $az->date_debut."h - ".$az->date_fin."h"."\r\n";
						}			 
					?></div>
						<br/>
					<?php 	
						}
					?>
	 			</div>		 				 				 				 							
			</div>
		</div>
		<div class="container">
			<header class="page-header">
				<h1>Les types de location proposés sont :</h1>
			</header>
			<h4>1.	Location des locaux de moindre envergure - loués à titre gratuit</h4> 
			<div class="col-md-12 text-justify ">
				<blockquote class="small">	
					<p>En ce qui concerne les locaux de moindre envergure, leur planning est assez rigide dans la mesure où il s’agit essentiellement de permanences ou de locaux occupés en permanence par les associations.
					</p>
					<p>En cas de demande pour ces salles, on consulte leur planning et selon la disponibilité on la loue mais à titre gratuit, les particuliers ne peuvent pas louer cette catégorie de salle, la priorité est donnée aux permanences.
					</p>
				</blockquote>
				<br>
				<h4>2.	Location des salles payantes - avec particularités </h4>
				<blockquote class="small">
					<p>Au sein de la mairie, il y a uniquement quatre salles payantes avec certaines particularités. Ces salles payantes ne le sont pas toujours, dans la mesure où il existe un certain nombre de critères dont il faut tenir compte pour savoir si la salle sera payante ou non. 
					</p>
					<p>La salle est non payante si : 
					</p>
					<ul>
						<li>le pétitionnaire est une association à caractère non politique, il peut obtenir la gratuité de la salle à condition que la manifestation soit sans recette de toute nature.</li>
						<li>en cas des manifestations organisées par les syndicats ouvriers, des partis politiques, anciens combattants, invalides du travail, donneurs de sang, ou bien organisés par le comité d’action culturelle et touristique ou son parrainage, ou enfin organisés par le COS (Comité d’œuvres Sociales) de la mairie et le COS des services publics locaux.</li>
					</ul>
				</blockquote>
				<h4>3.	Location du matériel</h4>
				<blockquote class="small">
					<p>Il faut savoir qu’il est possible de disposer de matériel, or tout type de matériel ne peut pas être loué par tout le monde.
					</p>
					<p>Si des dégradations se produisent sur du matériel loué, un devis est demandé au service technique pour émettre une facture de dégradation.
					</p>
				</blockquote>
			</div>
		</div>
@endsection