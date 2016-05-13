@extends('layouts.app')

@section('accueil')  @endsection

@section('a_propos')  @endsection  

@section('client_consulter_salles') class="active" @endsection

@section('contact')  @endsection

@section('connexion')  @endsection

@section('inscription')  @endsection

@section('deconnection')  @endsection
@section('content')
<!-- Titre -->
		<div class="container">
		
				<div class="col-md-12">
						<?php 
						//$authors = Input::get('authors');
						$idSalle=$_POST['id_salle'];
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
							<div class="col-md-12"><label> Salle :</label><?php if(!is_null($nomSalle)) echo $nomSalle ?></div>
							<div class="col-md-12"><label>Adresse : </label><?php if(!is_null($adresseSalle)) echo $adresseSalle ?></div>
							<div class="col-md-12"><label>Capacité de la salle : </label><?php if(!is_null($capaciteSalle)) echo $capaciteSalle ?></div>
							<div class="col-md-12"><label>Gardien sur place : </label><?php if(!is_null($gardienSalle)) if($gardienSalle==0){ echo "Non";} else{echo "Oui"; }?></div>
						</fieldset>
					</div>
					<div class="col-md-12">
						<br>
						<div class="col-md-6">
							<fieldset>
								<legend>Matériel dans la salle</legend>
								<?php 
									$infosMateriel = DB::table('materiel')->distinct()->select('materiel.id','materiel.libelle_materiel')
										->join('salle_materiel','materiel.id','=','salle_materiel.id_materiel')
										->where('id_salle','=',$idSalle)
										->get();
										
								?><ul><?php
								if(empty($infosMateriel)){ echo "Aucun";}
								else{
								foreach( $infosMateriel as $infosMateriel) {
										$quantiteMateriel = DB::table('salle_materiel')
										->join('materiel','salle_materiel.id_materiel','=','materiel.id')
										->where('id_salle','=',$idSalle)
										->where('id_materiel','=', $infosMateriel->id)
										->count()
								?>
								<div class="col-md-12"> <li> <?php echo $infosMateriel->libelle_materiel."  ".$quantiteMateriel; ?> </li></div>
								<?php }  } ?>
								</ul>
							</fieldset>
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-6">
							<legend>Matériel loué</legend>
							<ul>
								<?php 
								$infosMateriel = DB::table('materiel')
												->get(); 
								foreach($infosMateriel as $infosMateriel){
									$quantite=$infosMateriel->quantite;
									
									$nbReserveMateriel = DB::table('materiel_reserve')
										->join('reservation','reservation.id','=','materiel_reserve.id_reservation')
										->where('id_materiel','=',$infosMateriel->id)
										->where('date_fin','>',date("Y-m-d"))
										->count();
									
									$nbSallesMateriel = DB::table('salle_materiel')
										->where('id_materiel','=',$infosMateriel->id)
										->count();
								?>
								
								<div class="col-md-6">
									<li>
									<?php
										echo $infosMateriel->libelle_materiel;
										
										$nb=$quantite-$nbReserveMateriel-$nbSallesMateriel
									?>
									</li>
								</div>
								<div class="col-md-6">
									<?php
									echo $authors = Input::get($infosMateriel->libelle_materiel);
									?>
								</div>
								</br>
								<?php
								}
								?>
							</ul>
						</div>
					</div>

					<div class="col-md-offset-3 col-md-6">
						<fieldset>
							<legend> Paiement de la caution</legend>
							<label>Type de carte</label></br>
							<label>Numéro de carte</label></br>
							<label>Cryptogramme</label></br>
						</fieldset>
					</br></br>
 						<a class="btn btn-primary" href="client_reservation_paiement" role="button">Etape suivante</a>
					</div>
				</div>
			
		</div>

@stop
