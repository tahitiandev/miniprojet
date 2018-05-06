<?php

// Connexion à la base de données
require '../../bdd/connect.php';

// Variables
$login 		= $_POST['login'];
$password 	= $_POST['password'];
$nom 		= $_POST['nom'];
$prenom 	= $_POST['prenom'];
$profil 	= $_POST['profil'];

// Requête
$req = $bdd -> prepare("INSERT INTO user VALUES ('', :login, :password, :nom, :prenom, :profil)");

// Execution
$req -> execute(array(
	'login' 	=> $login,
	'password' 	=> $password,
	'nom' 		=> $nom,
	'prenom' 	=> $prenom,
	'profil' 	=> $profil
));

// Fermeture
$req -> closeCursor();

// Redirection
header('Location: ../users.php');