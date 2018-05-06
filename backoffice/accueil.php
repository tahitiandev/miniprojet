<?php
// Titre de la page
$titre = "Page d'accueil";

//Connnexion
require 'templates/header.php';
?>

<!-- CONTENT -->
<section class="content">
	<ul>
		<a href="rubrique.php"><li>Voir les rubriques</li></a>
		<a href="message.php"><li>Consulter les messages</li></a>
		<a href="users.php"><li>Gestion des utilisateurs</li></a>
		<a href="deconnexion.php"><li id="btn-deconnexion">Deconnexion</li></a>
	</ul>
</section>
<!-- CONTENT -->

<?php
//Connnexion
require 'templates/footer.php';
?>