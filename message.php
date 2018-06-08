<?php
include('php/header.php');

// Condition dans le cas ou la page est réactualisée
if(empty($_POST['name'])){
	
	header('Location: contact');
}

// F178 : Redirection vers page accueil après 50 secondes
header('Refresh: 50; URL=accueil');

// Traitement des données envoyées par contact.php
if(isset($_POST['envoyer'])){

// Réception des données
$nom 			= $_POST['name'];
$telephone 		= $_POST['telephone'];
$email 			= $_POST['email'];
$sujet 			= $_POST['sujet'];
$message 		= $_POST['message'];
$receptionDate 	= $_POST['receptionDate'];
$receptionHeure = $_POST['receptionHeure'];

// Connexion à la base de données
require 'bdd/connect.php';

// Requête
$req = $bdd -> prepare("INSERT INTO message VALUES ('', :nom, :telephone, :email, :sujet, :message, :receptionDate, :receptionHeure)");

// Execution
$req -> execute(array(
	'nom' => $nom,
	'telephone' => $telephone,
	'email' => $email,
	'sujet' => $sujet,
	'message' => $message,
	'receptionHeure' => $receptionHeure,
	'receptionDate' => $receptionDate
));

// Fermeture
$req -> closeCursor();

	// Si tous les champs obligatoires sont remplis
	if(!empty($nom) && !empty($email) && !empty($message)){

		?>

		<div class="reception-msg">

			<h3 class="titre-msg">Message de confirmation !</h3>
			
			<article>Votre message nous a bien été transmis ! Nous vous rappelons ci-dessous les données transmises</article>
			
			<div class="contenu-msg">

				<table>
					<tr>
						<td class="intitule" style="width:30%;">Nom et Prénom</td>
						<td><?php echo $nom; ?></td>
					</tr>
					<tr>
						<td class="intitule">Date de l'envoi</td>
						<td><?php echo $receptionDate; ?></td>
					</tr>
					<tr>
						<td class="intitule">Heure de l'envoi</td>
						<td><?php echo $receptionHeure; ?></td>
					</tr>
					<tr>
						<td class="intitule">Téléphone</td>
						<td><?php echo $telephone; ?></td>
					</tr>
					<tr>
						<td class="intitule">Email</td>
						<td><?php echo $email; ?></td>
					</tr>
					<tr>
						<td class="intitule">L'objet du message</td>
						<td><?php echo $sujet; ?></td>
					</tr>
					<tr>
						<td class="intitule">Contenu de votre message</td>
						<td><?php echo $message; ?></td>
					</tr>
				</table>
			
			</div><!-- class="contenu-msg" -->

		</div><!-- class="reception-msg" -->

	<?php

	}
	else{

		// Sinon, revoi vers la page formulaire
		header('Location: contact.php');

	}
}

include('php/footer.php');