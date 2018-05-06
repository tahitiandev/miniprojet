<?php

// Connexion à la base de données
require '../../bdd/connect.php';

// Variables
$iddet 			= $_POST['iddet'];
$ordre 			= $_POST['ordre'];
$titre 			= $_POST['titre'];

// Requête
$req = $bdd -> prepare("INSERT INTO titre VALUES ('', :titre, :ordre, :iddet)");

// Execution
$req -> execute(array(
	'titre' 	=> $titre,
	'ordre' 	=> $ordre,
	'iddet' 	=> $iddet
));

// Fermeture
$req -> closeCursor();

// Redirection
header('Location: ../detail.php?id='.$iddet);