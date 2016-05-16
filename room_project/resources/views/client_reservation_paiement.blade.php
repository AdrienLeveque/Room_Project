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
			<div class="col-md-12">	
			<div class="col-md-offset-3 col-md-6">
			<?php 
			if(isset($formData)){
				echo $formData;
			}else {
					echo "toto";
			}
			//echo $formData=$_GET['id'];
			//echo "toto";
					
				?>			
					<legend> Paiement de la caution</legend>
					{!! Form::open(['url' => 'client_reservation_paiement', 'files' => true]) !!}
					
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
				
							{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
							{!! Form::close() !!}			
			</div>	
			</div>
		</div>	
	</div>
@stop