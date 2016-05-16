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
					$idReservation=$_GET['id'];
						$infosReservation = DB::table('reservation')->where('id', $idReservation)->first(); 
						$idSalle=$infosReservation->id_salle_reservation;
						$idUser=$infosReservation->id_user;
						
						$infosSalle = DB::table('salle')->where('id', $idSalle)->first();
						$nomSalle=$infosSalle->nom_salle;
						$adresseSalle=$infosSalle->adresse_salle;
						$capaciteSalle=$infosSalle->capacite_salle;
						$gardienSalle=$infosSalle->gardien_salle;
						$pathSalle=$infosSalle->image; 
						$caution_salle=$infosSalle->caution_salle; 

						
						$est_employe = false;
						$id_client_reduc=0;
						$employe = DB::table('employe')->get();
						foreach( $employe as $employe)
						{
							if($employe->id_user == $idUser)
							{
								$est_employe = true;
								$id_employe_reduc = $employe->id_type_employe;
							}
						}
						if($est_employe)
						{
							
							$reductionEmploye = DB::table('type_employe')->select('reduction_type_employe')->where('id','=',$id_employe_reduc)->first();
							$reduction=$reductionEmploye->reduction_type_employe;
						}
						else
						{
							$client = DB::table('client')->get();
							foreach( $client as $client)
							{
								if($client->id_users == $idUser)
								{
									$id_client_reduc = $client->id_client_statut;
								}
							}
							$reductionClient = DB::table('client_statut')->select('reduction_statut')->where('id','=',$id_client_reduc)->first();
							$reduction=$reductionClient->reductionClient;
						}
	
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
									->where('id_materiel','=',$infosMateriel->id)
									->where('id_reservation','=',$idReservation)
									->count();
							
							?>
							
								<div class="col-md-6">
									<div class="col-md-10">
										<li>
											<?php  echo $infosMateriel->libelle_materiel.':';	?>
										</li>
									</div>
									
								<?php echo $nbReserveMateriel; ?>
								</div>
								<div class="col-md-6">
									<?php
									echo $authors = Input::get($infosMateriel->libelle_materiel);
									?>
								</div>
								</br>
							<?php
							}
							if($reduction!=0){
								$prix_acev_reduction=$caution_salle-($caution_salle/$reduction);
							}else{
								$prix_acev_reduction=$caution_salle;
							}
							
							?>
						</ul>
					</div>
				</div>
				<div class="col-md-offset-3 col-md-6">
					<fieldset>
						<legend> Paiement de la caution: <?php echo $prix_acev_reduction."€"; ?></legend>
						{!! Form::open(['url' => 'client_reservation_paiement']) !!}
							<div class="col-md-12">
							<div class="col-md-4">Type de carte </div>
								<div class="col-md-8"> 
									@if(session()->has('error'))
										<div class="alert alert-danger">{!! session('error') !!}</div>
									@endif
									<div class="form-group {!! $errors->has('type_carte') ? 'has-error' : '' !!}">
										{!! Form::text('type_carte', null, array('class' => 'form-control', 'placeholder' => 'Type de carte')) !!}
										{!! $errors->first('type_carte', '<small class="help-block">:message</small>') !!}
									</div>
								</div>
							</div>
							<div class="col-md-12">
							<div class="col-md-4">Numero de carte </div>
								<div class="col-md-8"> 
									<div class="form-group {!! $errors->has('numero_carte') ? 'has-error' : '' !!}">
										{!! Form::text('numero_carte', null, array('class' => 'form-control', 'placeholder' => 'Numero de carte')) !!}
										{!! $errors->first('numero_carte', '<small class="help-block">:message</small>') !!}
									</div>
								</div>
							</div>
							<div class="col-md-12">
							<div class="col-md-4">Code de vérification </div>
								<div class="col-md-8"> 
									<div class="form-group {!! $errors->has('code_verification') ? 'has-error' : '' !!}">
										{!! Form::text('code_verification', null, array('class' => 'form-control', 'placeholder' => 'Code de vérification')) !!}
										{!! $errors->first('code_verification', '<small class="help-block">:message</small>') !!}
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="col-md-4">Annee </div>
									<div class="col-md-8"> 
										<div class="form-group {!! $errors->has('numero_carte') ? 'has-error' : '' !!}">
											{!! Form::selectRange('mois',null,12, 1) !!}
											{!! $errors->first('mois', '<small class="help-block">:message</small>') !!}
										
										
											{!! Form::selectRange('annee',null, 2024, 2016) !!}
											{!! $errors->first('annee', '<small class="help-block">:message</small>') !!}
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
							<br>
							<br>
							<div class="col-md-6">
								<input type="HIDDEN" name="id_reservation" value="<?php echo $idReservation ?>">
								{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
								{!! Form::close() !!}
							</div>
							
						
					</fieldset>
				</div>	
			</div>	
		</div>
@stop