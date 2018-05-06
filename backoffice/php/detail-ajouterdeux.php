<?php

// Connexion à la base de données
require '../../bdd/connect.php';

// Variables
$id 			= $_POST['iddet']; // point de retour
$description 	= $_POST['description'];
//image
$titre 			= $_POST['titre'];

// Déplacement de l'image
if (isset($_FILES['file']) AND $_FILES['file']['error'] == 0)
{

	$deb = "SELECT iddet FROM detail ORDER BY  iddet DESC LIMIT 1";
	$test = $bdd -> query($deb);
	$recup = $test ->fetch();
	$data = $recup['iddet']+1;

	$anciennom = $_FILES['file']['name'];
	$extention = '.'.pathinfo($anciennom, PATHINFO_EXTENSION);
	$debut = "detail-";

	$file   = $debut;
	$file  .= $data;
	$file  .= $extention;

    move_uploaded_file($_FILES['file']['tmp_name'], '../../images/articles/' .$file);

    $image 		= $file;

}else{
	$image = "";
}

// Requête
$req = $bdd -> prepare("INSERT INTO detail VALUES ('', :description, :image, :titre)");

// Execution
$req -> execute(array(
	'description' 	=> $description,
	'image' 		=> $image,
	'titre' 			=> $titre
));

// Fermeture
$req -> closeCursor();

// Redirection
header('Location: ../detail.php?id='.$id);