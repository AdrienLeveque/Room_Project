<!DOCTYPE html>

<html xmlns="http://w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<?php
	try
		{
			// On se connecte à MySQL
			$bdd = new PDO('mysql:host=localhost;dbname=room_projet;charset=utf8', 'root', 'alex95');
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
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
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