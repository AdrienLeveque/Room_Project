@extends('template')

@section('contenu')		
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
  					<a class="navbar-brand" href="#">Utilisateur non enregistré: </a>
  				</div>
		        <div class="container-fluid">
		          <ul class="nav navbar-nav">
		            <li> <a href="accueil">Accueil</a> </li>
		            <li class="active"> <a href="connexion">Connexion</a></li>
		            <li> <a href="comment_ca_marche">Comment ça marche</a> </li>
		            <li> <a href="contact">Contact</a> </li>
		          </ul>
		        </div>
		     </nav>
		</div>

		<div class="container">
			<div class="col-sm-6 col-md-6 col-ms-offset-3 col-md-offset-3"> 
				<fieldset>
					<legend>Connexion</legend>

					<div class="panel panel-info">
						<div class="panel-body"> 
							{!! Form::open(['url' => 'accueil']) !!}
								<div class="form-group {!! $errors->has('identifiant') ? 'has-error' : '' !!}">
								<label>Identifiant: </label>
									{!! Form::text('identifiant', null, ['class' => 'form-control', 'placeholder' => 'Votre identifiant']) !!}
									{!! $errors->first('identifiant', '<small class="help-block">:message</small>') !!}
								</div>
								<div class="form-group {!! $errors->has('mdp') ? 'has-error' : '' !!}">
								<div class="col-md-12">
									<label>Mot de passe: </label>
								</div>
									<input type="password" class="form-control" name="password">

									@if ($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
								</div>
								{!! Form::submit('Connexion !', ['class' => 'btn btn-primary']) !!}
								<a class="btn btn-primary" href="inscription" role="button">S'inscrire</a>
							{!! Form::close() !!}
						</div>
					</div>
					
					<div class="col-md-12"> 
	    				 <ul>
	    				 	</br>
							<li><a href="inscription.php">S'inscrire</a></li>
						 	<li><a href="#">Mot de passe oublié</a></li>
	    				</ul>
	    			</div> 

				</fieldset>
			</div>
		</div>
@stop