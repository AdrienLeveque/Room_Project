@extends('layouts.app')

@section('accueil')  @endsection

@section('a_propos')  @endsection  

@section('administration') class="active" @endsection

@section('contact')  @endsection

@section('connexion')  @endsection

@section('inscription')  @endsection

@section('deconnection')  @endsection
@section('content')
<!-- Titre -->
		<div class="container">
		{!! Form::open(['url' => 'admin_employer','files' => true]) !!}
				<?php
				
					$type_employe = DB::table('type_employe')->get(); 
					$client = DB::table('users')->get(); 
					
				?>
		
			<div class="col-md-12">	
				<div class="col-md-12">
				<div class="col-md-3"></div>
					<div class="col-md-6">
					<legend>Ajouter un employe : </legend>
					<?php
						$les_types=array();
						foreach($type_employe as $type_employe){
							
							$les_types[]=$type_employe->libelle_type_employe;
						}
						$les_emails=array();
						foreach($client as $client){
							
							$les_emails[]=$client->email;
						}
					?>
				<div class="col-md-4">Types des employes </div>
					<div class="col-md-8"> 
						<div class="form-group {!! $errors->has('nom_salle') ? 'has-error' : '' !!}">
							{{ Form::select('type_employe', $les_types) }}
							{!! $errors->first('nom_salle', '<small class="help-block">:message</small>') !!}
						</div>
					</div>
				
				<div class="col-md-4">Les clients </div>
					<div class="col-md-8"> 
						<div class="form-group {!! $errors->has('nom_salle') ? 'has-error' : '' !!}">
							{{ Form::select('email', $les_emails) }}
							{!! $errors->first('nom_salle', '<small class="help-block">:message</small>') !!}
						</div>
					</div>
				{!! Form::submit('Etape suivante !', ['class' => 'btn btn-info center-block']) !!}
				{!! Form::close() !!}
				</div>
			</div>		
		
		</div>
@stop