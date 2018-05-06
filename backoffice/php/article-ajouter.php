<?php

// Connexion à la base de données
require '../../bdd/connect.php';

// Variables
$nom 			= $_POST['nom'];
$description 	= $_POST['description'];
$code 			= $_POST['code'];
$idrub 			= $_POST['idrub'];

// Requête
$req = $bdd -> prepare("INSERT INTO article VALUES ('', :nom, :description, :code, :idrub)");

// Execution
$req -> execute(array(
	'nom' 			=> $nom,
	'description' 	=> $description,
	'code' 			=> $code,
	'idrub' 		=> $idrub
));

// Fermeture
$req -> closeCursor();

// Redirection
header('Location: ../article.php?id='.$idrub);