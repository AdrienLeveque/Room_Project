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
		            <li class="active"> <a href="inscription">Inscription</a> </li>
		            <li> <a href="comment_ca_marche">Comment ça marche</a> </li>
		            <li> <a href="contact">Contact</a> </li>
		          </ul>
		        </div>
		     </nav>
		</div>

		<div class="container">
			<div class="col-sm-6 col-md-6 col-ms-offset-3 col-md-offset-3">
				<fieldset>
					
					<legend>Inscription</legend>
					{!! Form::open(['route' => 'storeEmail']) !!}
					<div class="col-md-12">
						<div class="col-md-4"> Nom </div>
						<div class="col-md-8"> 
							<div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
								{!! Form::text('nom', null, array('class' => 'form-control', 'placeholder' => 'Entrez votre nom')) !!}
								{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
							</div>
						</div>
					</div>
					</br></br></br>
					<div class="col-md-12">
						<div class="col-md-4"> Prenom </div>
						<div class="col-md-8"> 
							<div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
								{!! Form::text('prenom', null, array('class' => 'form-control', 'placeholder' => 'Entrez votre prenom')) !!}
								{!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
							</div>
						</div>
					</div>
					</br></br></br>
					<div class="col-md-12">
						<div class="col-md-4"> Mot de passe </div>
						<div class="col-md-8"> 
							<div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
								{!! Form::text('password', null, array('class' => 'form-control', 'placeholder' => 'Entrez votre mot de passe')) !!}
								{!! $errors->first('password', '<small class="help-block">:message</small>') !!}
							</div>
						</div>
					</div>

					</br></br></br>
					<div class="col-md-12">
						<div class="col-md-4"> Confirmer le mot de passe </div>
						<div class="col-md-8"> 
							<div class="form-group {!! $errors->has('confirm_password') ? 'has-error' : '' !!}">
								{!! Form::text('confirm_password', null, array('class' => 'form-control', 'placeholder' => 'Entrez votre mot de passe')) !!}
								{!! $errors->first('confirm_password', '<small class="help-block">:message</small>') !!}
							</div>
						</div>
					</div>

					</br></br></br>
					<div class="col-md-12">
						<div class="col-md-4"> Date de naissance </div>
						<div class="col-md-8">
							
							<div class="form-group {!! $errors->has('jour') ? 'has-error' : '' !!}">
								{!! Form::date('jour', null, array('class' => 'form-control', 'placeholder' => 'Entrez votre mot de passe')) !!}
								{!! $errors->first('jour', '<small class="help-block">:message</small>') !!}
							</div>
							
						</div>
					</div>

					</br></br></br>
					<div class="col-md-12">
						<div class="col-md-4"> Adresse</div>
						<div class="col-md-8"> 
							<div class="form-group {!! $errors->has('adresse') ? 'has-error' : '' !!}">
								{!! Form::text('adresse', null, array('class' => 'form-control', 'placeholder' => 'Entrez votre adresse')) !!}
								{!! $errors->first('adresse', '<small class="help-block">:message</small>') !!}
							</div>
						</div>
					</div>
					</br></br>
					<div class="col-md-12">
						<div class="col-md-4"> </div>
						<div class="col-md-4">
							<div class="form-group {!! $errors->has('code_postal') ? 'has-error' : '' !!}">
								{!! Form::text('code_postal', null, array('class' => 'form-control', 'placeholder' => 'Code postal')) !!}
								{!! $errors->first('code_postal', '<small class="help-block">:message</small>') !!}
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group {!! $errors->has('ville') ? 'has-error' : '' !!}">
								{!! Form::text('ville', null, array('class' => 'form-control', 'placeholder' => 'Ville')) !!}
								{!! $errors->first('ville', '<small class="help-block">:message</small>') !!}
							</div>
						</div>
					</div>

					</br></br></br>
					<div class="col-md-12">
						<div class="col-md-4"> Téléphone </div>
						<div class="col-md-8"> 
							<div class="form-group {!! $errors->has('telephone') ? 'has-error' : '' !!}">
								{!! Form::text('telephone', null, array('class' => 'form-control', 'placeholder' => 'Entrez votre téléphone')) !!}
								{!! $errors->first('telephone', '<small class="help-block">:message</small>') !!}
							</div>
						</div>
					</div>

					</br></br></br>
					<div class="col-md-12">
						<div class="col-md-4"> Couriel </div>
						<div class="col-md-8"> 
							<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
								{!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Entrez votre email')) !!}
								{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
							</div>
						</div>
					</div>
					</br></br></br>
					<div class="col-md-12">
						
							<div class="form-group {!! $errors->has('checkbox1') ? 'has-error' : '' !!}">
								{!! Form::checkbox('checkbox1') !!}
								{!! $errors->first('checkbox1', '<small class="help-block">:message</small>') !!}
								J'ai lu et j'accepte les conditions générales d'utilisation
							</div>
						
					</div>
					</br>
					<div class="col-md-12">
						
							<div class="form-group {!! $errors->has('checkbox2') ? 'has-error' : '' !!}">
								{!! Form::checkbox('checkbox2') !!}
								{!! $errors->first('checkbox2', '<small class="help-block">:message</small>') !!}
								Je refuse que ces informatins soient utilisées à des fins commerciale
							</div>
						
					</div>

					</br></br></br>
					<div class="col-md-6">
						{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
					</div>
						{!! Form::close() !!}
				</fieldset> 
			
		</div>
@stop
</body>