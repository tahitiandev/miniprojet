<?php
// Titre de la page
$titre = "Les rubriques";

//Connnexion
require 'templates/header.php';
?>

<!-- CONTENT -->
<section class="content">
	<ul>
		<?php 

		// Connexion à la base de données
		require '../bdd/connect.php';

		// SQL
		$req = $bdd -> prepare('SELECT * FROM rubrique');

		// Execute
		$req -> execute();

		// Affiche
		while($rubrique = $req -> fetch()){
			echo '<a href="article.php?id='.$rubrique['idrub'].'"><li>'.$rubrique['intitulerub'].'</li></a><a title="id='.$rubrique['idrub'].'" href="php/rubrique-supprimer.php?id='.$rubrique['idrub'].'" class="btn-supprimer">Supprimer la rubrique</a>';
		}

		// Fermeture de la connexion
		$req -> closeCursor();
		?>
	</ul>

	<form class="formulaire" action="php/rubrique-ajouter.php" method="POST" enctype="multipart/form-data">

		<h4>Ajouter une rubrique</h4>

		<label>Nom de la rubrique</label>
		<input type="text" name="nom">

		<label>Description</label>
		<textarea name="description"></textarea>
		<br>
		<label>Importer une image descriptif</label>
		<input style="border: 0px;" type="file" name="file">

		<label>Code de la rubrique</label>
		<input type="text" name="code" placeholder="Ex:A, B, C , D ...">
		<br><br>

		<button type="submit">Ajouter</button>
	</form>

</section>
<!-- CONTENT -->

<?php
//Connnexion
require 'templates/footer.php';
?>