<!DOCTYPE html>
<html xmlns="http://w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Location des salles</title>
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css') !!}
		<!-- Latest compiled and minified CSS -->
		{!! Html::style('bootstrap/css/bootstrap.min.css') !!}
		<!-- Optional theme -->
		{!! Html::style('bootstrap/css/bootstrap-theme.min.css') !!}
		<!--[if lt IE 9]>
			{{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
			{{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
		<![endif]-->
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
		
		<style> textarea { resize: none; } </style>
	</head>
	<body>
		</br>
		<div class="container">
			<label>Mairie de la ville d'Orsay </label> 
			
			<hr>
		</div>
		@yield('contenu')
	</body>
</html>