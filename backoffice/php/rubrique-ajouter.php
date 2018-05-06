<?php

// Connexion à la base de données
require '../../bdd/connect.php';

// Variables
$nom 			= $_POST['nom'];
$description 	= $_POST['description'];
$code 			= $_POST['code'];

// Déplacement de l'image
if (isset($_FILES['file']) AND $_FILES['file']['error'] == 0)
{

	$deb = "SELECT idrub FROM rubrique ORDER BY  idrub DESC LIMIT 1";
	$test = $bdd -> query($deb);
	$recup = $test ->fetch();
	$data = $recup['idrub']+1;

	$anciennom = $_FILES['file']['name'];
	$extention = '.'.pathinfo($anciennom, PATHINFO_EXTENSION);
	$debut = "rubrique-";

	$file   = $debut;
	$file  .= $data;
	$file  .= $extention;

    move_uploaded_file($_FILES['file']['tmp_name'], '../../images/articles/' .$file);

    $image 		= $_FILES['file']['name'];
    $newname 	= $file;

}else{
	$image = "";
    $newname = "";
}

// Requête
$req = $bdd -> prepare("INSERT INTO rubrique VALUES ('', :nom, :description, :image, :newname, :code)");

// Execution
$req -> execute(array(
	'nom' 			=> $nom,
	'description' 	=> $description,
	'image' 		=> $image,
	'newname' 		=> $newname,
	'code' 			=> $code
));

// Fermeture
$req -> closeCursor();

// Redirection
header('Location: ../rubrique.php');