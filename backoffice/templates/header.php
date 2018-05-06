<?php
/**

	Developpeur : HEITAA Gilles
	Date 		: 20/10/2017
	Pays 		: Polynésie Française 
	Projet		: Page d'accueil

*
*/

session_start();

if(!isset($_SESSION['login'])){
	header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>BackOffice</title>
	<meta charset="utf-8">

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

    <!-- icone -->
    <link rel="icon" href="img/logo.png">
</head>
<body>
<!-- HEADER -->
<a href="accueil.php">
<header>

  <h1><?php echo $titre; ?></h1>
	
</header>
</a>
<!-- HEADER -->

<!-- LOGO DU SITE -->
<img class="logo" src="img/logo.png">