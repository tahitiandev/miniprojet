<?php
// Titre de la page
$titre = "Les articles";

//Connnexion
require 'templates/header.php';
?>

<!-- CONTENT -->
<section class="content">
		<?php 
		// Récupération des variables
		$id = $_GET['id'];

		// Connexion à la base de données
		require '../bdd/connect.php';

		// SQL
		$req = $bdd -> prepare('
			SELECT *
			FROM article
			WHERE rubrique = :id
			');

		// Execute
		$req -> execute(array(
			'id' => $id
		));

		// Affiche
		while($article = $req -> fetch()){
			echo '<table style="width:100%;">';
			echo '<tr>';
			echo '<th style="width:110px;">Code</th>';
			echo '<td>'.$article['codeart'].'</td>';
			echo '</tr></a>';
			echo '<tr>';
			echo '<th>Titre</th>';
			echo '<td>'.$article['titreart'].'</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>Descriptif</th>';
			echo '<td>'.$article['descriptionart'].'</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th>Action</th>';
			echo '<td style="height:60px;">
					<a class="action-consulter" href="detail.php?id='.$article['idart'].'">Consulter</a>
					<a class="action-supprimer" href="php/article-supprimer.php?id='.$article['idart'].'&retour='.$_GET['id'].'">Supprimer</a>
					</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<th></th>';
			echo '<td style="height:40px;"><hr></td>';
			echo '</tr>';
			echo '</table>';
			echo '';
		}

		// Fermeture de la connexion
		$req -> closeCursor();
		?>


	<form class="formulaire" action="php/article-ajouter.php" method="POST">

		<h4>Ajouter un article</h4>

		<label>Nom de l'article</label>
		<input type="text" name="nom">

		<label>Description</label>
		<textarea name="description"></textarea>

		<label>Code de la rubrique</label>
		<input type="text" name="code" placeholder="Exemple : A01,A02... B01,B02..."><br>

		<input type="hidden" name="idrub" value="<?php echo $_GET['id']; ?>"><br>


		<button type="submit">Ajouter</button>
	</form>





</section>
<!-- CONTENT -->

<?php
//Connnexion
require 'templates/footer.php';
?>