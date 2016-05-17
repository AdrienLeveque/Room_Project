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
		{!! Form::open(['url' => 'admin_salle_update','files' => true]) !!}
				<?php
				
					$infosSalle = DB::table('salle')->get(); 
					
						/*$nomSalle=$infosSalle->nom_salle;
						$adresseSalle=$infosSalle->adresse_salle;
						$capaciteSalle=$infosSalle->capacite_salle;
						$gardienSalle=$infosSalle->gardien_salle;
						$pathSalle=$infosSalle->image; */
						
					
				?>
		
					
			<div class="col-md-12">	
				<div class="col-md-12">
				<div class="col-md-3"></div>
					<div class="col-md-6">
					<legend>Mise à jour d'une salle : </legend>
					<?php
						$les_salles=array();
						foreach($infosSalle as $infosSalle){
							
							$les_salles[]=$infosSalle->nom_salle;
						}
					?>
				<div class="col-md-4">Nom de la salle </div>
					<div class="col-md-8"> 
						<div class="form-group {!! $errors->has('nom_salle') ? 'has-error' : '' !!}">
							{{ Form::select('nom_salle', $les_salles) }}
							{!! $errors->first('nom_salle', '<small class="help-block">:message</small>') !!}
						</div>
					</div>
				
				{!! Form::submit('Etape suivante !', ['class' => 'btn btn-info center-block']) !!}
				{!! Form::close() !!}
				</div>
			</div>
		</div>
@stop