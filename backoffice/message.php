<?php
// Titre de la page
$titre = "Gestion des messages";

// HEADER html
require 'templates/header.php';

// Connexion à la se de donnée
include('../bdd/connect.php');

// Requête
$req = $bdd -> prepare("SELECT * FROM message");

// Execute
$req -> execute();

?>

<div id="conteneur-message">

<table>
	<tr>
		<th>N°</th>
		<th>Nom et Prénom</th>
		<th>Tél</th>
		<th>Email</th>
		<th>Date</th>
		<th>Heure</th>
		<th>Sujet</th>
		<th>Message</th>
	</tr>
<?php

	$num = 1;

// Afficher
while($data = $req -> fetch()){

	echo '<tr>';
		echo '<td>'.$num.'</td>';
		echo '<td>'.$data['nom'].'</td>';
		echo '<td>'.$data['telephone'].'</td>';
		echo '<td>'.$data['email'].'</td>';
		echo '<td>'.$data['receptionDate'].'</td>';
		echo '<td>'.$data['receptionHeure'].'</td>';
		echo '<td>'.$data['sujet'].'</td>';
		echo '<td>'.$data['message'].'</td>';
	echo '</tr>';

	$num++;

}

?>
</table>
</div>

<?php

// FOOTER
require 'templates/footer.php';
?>