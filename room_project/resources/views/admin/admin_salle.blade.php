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
		{!! Form::open(['url' => 'admin_salle','files' => true]) !!}
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
					<div class="col-md-6">
					<legend>Ajouter une nouvelle salle : </legend>
						<div class="col-md-4">Nom de la salle </div>
							<div class="col-md-8"> 
								<div class="form-group {!! $errors->has('nom_salle') ? 'has-error' : '' !!}">
									{!! Form::text('nom_salle', null, array('class' => 'form-control', 'placeholder' => 'Nom de la salle')) !!}
									{!! $errors->first('nom_salle', '<small class="help-block">:message</small>') !!}
								</div>
							</div>
						<div class="col-md-4">Numero de la salle </div>
							<div class="col-md-8"> 
								<div class="form-group {!! $errors->has('numero_salle') ? 'has-error' : '' !!}">
									{!! Form::text('numero_salle', null, array('class' => 'form-control', 'placeholder' => 'Numero de la salle')) !!}
									{!! $errors->first('numero_salle', '<small class="help-block">:message</small>') !!}
								</div>
							</div>
						<div class="col-md-4">Adresse de la salle </div>
							<div class="col-md-8"> 
								<div class="form-group {!! $errors->has('adresse_salle') ? 'has-error' : '' !!}">
									{!! Form::text('adresse_salle', null, array('class' => 'form-control', 'placeholder' => 'Adresse de la salle')) !!}
									{!! $errors->first('adresse_salle', '<small class="help-block">:message</small>') !!}
								</div>
							</div>
						<div class="col-md-4">Tarif de la salle </div>
							<div class="col-md-8"> 
								<div class="form-group {!! $errors->has('tarif_salle') ? 'has-error' : '' !!}">
									{!! Form::text('tarif_salle', null, array('class' => 'form-control', 'placeholder' => 'Tarif de la salle')) !!}
									{!! $errors->first('tarif_salle', '<small class="help-block">:message</small>') !!}
								</div>
							</div>
						<div class="col-md-4">Capacite de la salle </div>
							<div class="col-md-8"> 
								<div class="form-group {!! $errors->has('capacite_salle') ? 'has-error' : '' !!}">
									{!! Form::text('capacite_salle', null, array('class' => 'form-control', 'placeholder' => 'Capacite de la salle')) !!}
									{!! $errors->first('capacite_salle', '<small class="help-block">:message</small>') !!}
								</div>
							</div>
						<div class="col-md-4">Possède gardien </div>
							<div class="col-md-8"> 
								<div class="form-group {!! $errors->has('gardien_salle') ? 'has-error' : '' !!}">
									{!! Form::radio('gardien_salle',true) !!} Oui
									{!! Form::radio('gardien_salle',false) !!} Non
									{!! $errors->first('gardien_salle', '<small class="help-block">:message</small>') !!}
								</div>
							</div>
						<div class="col-md-4">Caution de la salle </div>
							<div class="col-md-8"> 
								<div class="form-group {!! $errors->has('caution_salle') ? 'has-error' : '' !!}">
									{!! Form::text('caution_salle', null, array('class' => 'form-control', 'placeholder' => 'Caution de la salle')) !!}
									{!! $errors->first('caution_salle', '<small class="help-block">:message</small>') !!}
								</div>
							</div>
						<div class="col-md-4">Type salle </div>
							<div class="col-md-8"> 
								<div class="form-group {!! $errors->has('type_salle') ? 'has-error' : '' !!}">
									{!! Form::text('type_salle') !!} 
									{!! $errors->first('gardien_salle', '<small class="help-block">:message</small>') !!}
								</div>
							</div>
						<div class="col-md-4">L'image de la salle </div>
							<div class="col-md-6">
								
							<div class="panel panel-info">
							
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
				</div>
				{!! Form::submit('Etape suivante !', ['class' => 'btn btn-info center-block']) !!}
				{!! Form::close() !!}
			</div>
		</div>
@stop