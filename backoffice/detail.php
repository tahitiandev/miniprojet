<?php
// Titre de la page
$titre = "Les articles";

//Connnexion
require 'templates/header.php';
?>

<!-- CONTENT -->
<section class="content">

  <form class="formulaire" method="POST" action="php/detail-ajouter.php">

      <h4>Ajouter un titre</h4>
  
      <br>
      <label>Choisir l'odre</label>
      <?php

      $idsearch = $_GET['id'];

      require '../bdd/connect.php';

      $searchnum = $bdd -> prepare("SELECT * FROM titre WHERE article =:idsearch ORDER BY ordretitre DESC LIMIT 1");
      $searchnum -> execute(array("idsearch" => $idsearch));
      $search = $searchnum -> fetch();
      $thenum = $search['ordretitre'] + 1;
      ?>
      <input type="number" name="ordre" value="<?php echo $thenum; ?>">

      <label>Nombre du titre</label>
      <input type="text" name="titre"><br>

      <input type="hidden" name="iddet" value="<?php echo $_GET['id']; ?>">

      <button type="submit" name="submit" class="btn-update">Mettre à jour</button>

  </form>

  <form class="formulaire" method="POST" action="php/detail-ajouterdeux.php" enctype="multipart/form-data">

      <h4>Détailler un article</h4>
  
      <br>
      <label>Selectionner un titre</label>
      <select name="titre">
        <option>Liste des titres</option>
        <?php

          $id = $_GET['id'];

          $list = $bdd -> prepare("SELECT * FROM titre WHERE article =:id");
          $list -> execute(array('id' => $id));
          while($data = $list -> fetch()){
            echo '<option value="'.$data['idtitre'].'">'.$data['libelletitre'].'</option>';
          }
        ?>
      </select>
      <br><br>

      <label>Description</label>
      <textarea name="description"></textarea>

      <br><br>
      <label>Importer une image</label>
      <input style="border: 0px;" type="file" name="file">

      <input type="hidden" name="iddet" value="<?php echo $_GET['id']; ?>">

      <button type="submit" name="submit" class="btn-update">Mettre à jour</button>

  </form><br>




</section>


<!-- CONTENT -->
<section class="content">

  <?php
  // Speciaux
  require 'php/fonction.php';

  // Connexion
  require '../bdd/connect.php';
  
  // Variables
  $id = $_GET['id'];

  // SQL
  $primary = $bdd -> prepare("
  	  SELECT * FROM article WHERE idart = :id
  	");

  // Execute
  $primary -> execute(array('id' => $id));

  // Afficher
  $prim = $primary -> fetch();

  echo '<h2>'.$prim['titreart'].'</h2>
        <p>'.$prim['descriptionart'].'</p>
        ';

  $primary -> closeCursor();


  // SQL
  $second = $bdd -> prepare("
  	  SELECT * FROM titre WHERE article = :id
  	");

  // Execute
  $second -> execute(array('id' => $id));

  $numero=1;

  // Afficher
  while($sec = $second -> fetch()){
    echo '<h3>'.$numero.' - '.speciaux($sec['libelletitre']).'</h3>

         <a style="float:right;" class="btn-modifier" href="detail-update.php?id='.$sec['idtitre'].'">Modifier le titre</a><br><br><br>
         <a style="float:right;"  class="btn-supprimer" href="php/detail-supprimerdeux.php?id='.$sec['idtitre'].'&retour='.$_GET['id'].'">Supprimer le titre</a>
    ';
    
    $numero++;

      // Variable cible
      $titre = $sec['idtitre'];

	  // SQL
	  $trois = $bdd -> prepare("
	  	  SELECT * FROM detail WHERE titre = :titre
	  	");

	  // Execute
	  $trois -> execute(array('titre' => $titre));

    $numerotation = 1;

	  // Afficher
	  while($tro = $trois -> fetch()){

      echo '<p>'.$tro['descriptiondeg'].'<a style="float:right;" class="btn-supprimer" href="php/detail-supprimerdeux.php?id='.$tro['iddet'].'&retour='.$_GET['id'].'">Supprimer le détail</a></p>

             <img src="../images/articles/'.$tro['imagedet'].'">
             <hr>
       ';

       $numerotation++;
	  }


  }


  ?>

</section>
<!-- CONTENT -->

<?php
//Connnexion
require 'templates/footer.php';
?>