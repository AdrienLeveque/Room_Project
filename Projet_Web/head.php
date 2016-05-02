<!DOCTYPE html>

<html xmlns="http://w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<?php
	try
		{
			// On se connecte à MySQL
			$bdd = new PDO('mysql:host=localhost;dbname=bioprojet;charset=utf8', 'root', 'Milleniumtv1');
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
			}

			catch (Exception $e)
			{
			// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : ' . $e->getMessage());
		}
?>

	<head>
		<meta charset="utf-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	</head>

<!-- Barre du haut  -->
	<body>
		</br>
		<div class="container">
			<label>Mairie de la ville d'Orsay </label> 
			<button type="submit" class="pull-right">Deconnexion</button>
			<hr>
		</div>
	</body>