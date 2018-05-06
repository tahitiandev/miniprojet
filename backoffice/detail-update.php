<?php
// Titre de la page
$titre = "Mise à jour";

//Connnexion
require 'templates/header.php';

?>
<!-- CONTENT -->
<section class="content">

<form method="POST" action="detail-update.php?id=<?php echo $_GET['id']; ?>" style="width: 60%; margin: auto; margin-top: 40px;margin-bottom: 40px;">

<?php

  // Connexion
  require '../bdd/connect.php';
  
  // Variables
  $id = $_GET['id'];

  // SQL
  $req = $bdd -> prepare("
  	  SELECT *
  	  FROM titre
  	  WHERE idtitre = :id
  	");

  // Execute
  $req -> execute(array('id' => $id));

  // Afficher
  while($data = $req -> fetch()){

    echo '<label>Ordre</label>
            <input type="text" name="ordre" value="'.$data['ordretitre'].'"><br>';
  	echo '<label>Titre</label>
            <input type="text" name="titre" value="'.$data['libelletitre'].'">';


  }

  $req -> closeCursor();

?>

<button type="submit" name="submit" class="btn-update">Mettre à jour</button>

</form>

</section>

<?php



if(isset($_POST['submit'])){

	$id 	= $_GET['id'];
	$titre = $_POST['titre'];
	$ordre = $_POST['ordre'];

	$sql = $bdd -> prepare("UPDATE titre SET libelletitre = :titre, ordretitre = :ordre WHERE idtitre =:id");
	$sql -> execute(array(
		"titre" => $titre,
		"ordre" => $ordre,
		"id" 	=> $id
	));

  $sql -> closeCursor();

  // Redirection
  header('Location: detail-update.php?id='.$id);


}//if







//Connnexion
require 'templates/footer.php';
?>