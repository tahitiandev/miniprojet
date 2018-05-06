<?php

// Connexion à la base de données
require '../../bdd/connect.php';

// Variables
$id = $_GET['id'];
$retour = $_GET['retour'];

// Requête
$req = $bdd -> prepare("DELETE FROM article WHERE idart = :id");

// Execution
$req -> execute(array('id' => $id));

// Fermeture
$req -> closeCursor();

// Redirection
header('Location: ../article.php?id='.$retour);