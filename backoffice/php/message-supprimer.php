<?php

// Connexion à la base de données
require '../../bdd/connect.php';

// Variables
$id = $_GET['id'];

// Requête
$req = $bdd -> prepare("DELETE FROM message WHERE idmsg = :id");

// Execution
$req -> execute(array('id' => $id));

// Fermeture
$req -> closeCursor();

// Redirection
header('Location: ../message.php');

