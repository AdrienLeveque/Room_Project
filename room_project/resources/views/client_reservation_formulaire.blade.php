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
		{!! Form::open(['url' => 'client_reservation_1', 'files' => true]) !!}
				<?php
					$idUser=Auth::user()->id;
					$idSalle=$_GET['id'];
					$infosSalle = DB::table('salle')->where('id', $idSalle)->first(); 
						$nomSalle=$infosSalle->nom_salle;
						$adresseSalle=$infosSalle->adresse_salle;
						$capaciteSalle=$infosSalle->capacite_salle;
						$gardienSalle=$infosSalle->gardien_salle;
						$pathSalle=$infosSalle->image;
				?>
				<div class="col-md-12">
					<div class="col-md-6">  
						<img src="images/<?php echo $pathSalle ?>" class="img-thumbnail img-responsive center-block" alt="Responsive image" style="margin-bottom: 2%;">
					</div> 
					<div class="col-md-6">
						<fieldset>
							<legend>Location de materiel</legend>	
						<ul>
							<?php 
							$nb_des_materiels=0;
							$infosMateriel = DB::table('materiel')
											->get(); 
							foreach($infosMateriel as $infosMateriel){
								$quantite=$infosMateriel->quantite;
								$nb_des_materiels+=1;
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
								 {!!  Form::selectRange($infosMateriel->libelle_materiel, 0, $nb); !!}
								 <input type="HIDDEN" name="<?php echo $infosMateriel->id ?>" value="<?php echo $infosMateriel->id ?>">
							</div>
							</br></br>
							<?php
							}
							?>
						</ul>	
						</fieldset>
						<hr>
					</div>
					<div class="col-md-12">
						<div class="col-md-6">
							<fieldset>
								<legend> Formulaire clef</legend>
							</fieldset>
							<div class="panel panel-info">
								<div class="panel-heading">Envoi d'une fichiers PDF</div>
								<div class="panel-body"> 
									@if(session()->has('error'))
										<div class="alert alert-danger">{!! session('error') !!}</div>
									@endif
										<div class="form-group {!! $errors->has('Clef') ? 'has-error' : '' !!}">
											{!! Form::file('Clef', ['class' => 'form-control']) !!}
											{!! $errors->first('Clef', '<small class="help-block">:message</small>') !!}
										</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<fieldset>
								<legend> Formulaire Assurance</legend>
							</fieldset>	
							<div class="panel panel-info">
								<div class="panel-heading">Envoi d'une fichiers PDF</div>
								<div class="panel-body"> 
									@if(session()->has('error'))
										<div class="alert alert-danger">{!! session('error') !!}</div>
									@endif
									
										<div class="form-group {!! $errors->has('Assurance') ? 'has-error' : '' !!}">
											{!! Form::file('Assurance', ['class' => 'form-control']) !!}
											{!! $errors->first('Assurance', '<small class="help-block">:message</small>') !!}
										</div>
								
								</div>
							</div>
						</div>
					</div>
					
					<input type="HIDDEN" name="nb_des_materiels" value="<?php echo $nb_des_materiels ?>">
					<input type="HIDDEN" name="id_salle" value="<?php echo $idSalle ?>">
					<input type="HIDDEN" name="id_user" value="<?php echo $idUser ?>">
					<div class="col-md-12">
						</br></br>
						{!! Form::submit('Etape suivante !', ['class' => 'btn btn-primary']) !!}
						{!! Form::close() !!}
					</div>
				</div>
			</form>
		</div>
@stop