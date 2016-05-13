@extends('layouts.app')

@section('accueil')  @endsection

@section('a_propos')  @endsection  

@section('contact') class="active" @endsection

@section('client_consulter_salles')  @endsection

@section('connexion')  @endsection

@section('inscription')  @endsection

@section('deconnection')  @endsection

@section('content')	
<!-- Titre -->
	 <div class="container">
	</br>	     
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">Contactez-moi</div>
			<div class="panel-body"> 
				{!! Form::open(['url' => 'contact']) !!}
					<div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
						{!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
						{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
						{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
						{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
						{!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
						{!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
					</div>
					{!! Form::submit('Envoyer !', ['class' => 'btn btn-primary pull-right']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>		
@endsection