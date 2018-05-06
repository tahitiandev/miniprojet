<?php
session_start();

if(isset($_SESSION['login'])){
	header('Location: accueil.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Se loger</title>
	<meta charset="utf-8">

    <!-- css -->
    <link rel="stylesheet" href="css/styles.css" />

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 

    <!-- Zone d'impression -->
    <link rel="stylesheet" type="text/css" media="print" href="css/print.css" />
    
    <!-- icone -->
    <link rel="icon" href="images/logo/Fichier%201@0.5x.png">

</head>
<body>

<h1 id="titre-login">Veuillez saisir vos identifiants</h1>

<form autocomplete="off" id="container-login" action="php/login.php" method="POST">
	<!-- LOGIN -->
	<label for="login">Nom d'utilisateur</label>
	<input type="text" name="login" id="login" maxlength="100">

	<!-- PASSWORD -->
	<label for="password">Mot de passe</label>
	<input type="password" name="password" id="password" maxlength="100">

	<!-- BUTTON -->
	<button type="submit" name="submit">Confirmer</button>

</form>

</body>
</html>