<?php
// Titre de la page
$titre = "Gestion des utilisateurs";

// HEADER html
require 'templates/header.php';

// Connexion à la se de donnée
include('../bdd/connect.php');

// Requête
$req = $bdd -> prepare("SELECT * FROM user");

// Execute
$req -> execute();

?>

<div id="conteneur-user">

<fieldset id="add-user" style=" padding: 15px; margin-bottom: 15px;"><legend style="margin-left: 20px;">Ajouter un utilisateur</legend>
<form action="php/user-add.php" method="POST">
	<label>Nom : </label>
	<input type="text" name="nom">

	<label>Prénom : </label>
	<input type="text" name="prenom">

	<label>Login : </label>
	<input type="text" name="login">

	<label>Password : </label>
	<input type="text" name="password">

	<label>Profil : </label>
	<select name="profil">
		<option>Selectionner</option>
		<option value="user">Utilisateur</option>
		<option value="admin">Administrateur</option>
	</select>

	<button type="submit">Ajouter</button>

</form>
</fieldset>

<table>
	<tr>
		<th>N°</th>
		<th>Nom</th>
		<th>Prénom</th>
		<th>Login</th>
		<th>Mot de passe</th>
		<th>Profil</th>
		<th>Action</th>
	</tr>
<?php

	$num = 1;

// Afficher
while($data = $req -> fetch()){

	echo '<tr>';
		echo '<td>'.$num.'</td>';
		echo '<td>'.$data['nom'].'</td>';
		echo '<td>'.$data['prenom'].'</td>';
		echo '<td>'.$data['login'].'</td>';
		echo '<td>'.$data['password'].'</td>';
		echo '<td>'.$data['profil'].'</td>';
		echo '<td><a style="color:blue;" href="php/user-supprimer.php?id='.$data['iduser'].'">Supprimer</a></td>';
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