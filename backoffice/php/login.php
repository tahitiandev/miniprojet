<?php
/**

	Année : 2018
	Developpeur : Gilles HEITAA
	Contenu : Page d'authenfication des données saisies

*
*/

// Variable de session
session_start();

if(isset($_POST['submit'])){

  // Déclaration
  $login    = $_POST['login'];
  $password = $_POST['password'];

  // Connexiion à la base de données
  require '../../bdd/connect.php';

  if(!empty($login && $password)){

  	// Requête
     $req = $bdd -> prepare("
     	  SELECT *
     	  FROM user
     	  WHERE login =:login
     	  AND password =:password
     	");

     // Executer
     $req -> execute(array(
     	'login'    => $login,
     	'password' => $password
     ));

     // Fetch
     $resultat = $req -> fetch();

     if($resultat){

     	// Définir les variables sessions
     	$_SESSION['nom']    = $resultat['nom'];
     	$_SESSION['prenom'] = $resultat['prenom'];
     	$_SESSION['profil'] = $resultat['profil'];
     	$_SESSION['login']  = $resultat['login'];

     	// Redirection
      header('Location: ../accueil.php');

     }else{

     	header('Location: ../');

     }

  }




} //if