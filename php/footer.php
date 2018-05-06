
<!-- DEBUT FOOTER -->
<footer>
	<div id="footer-niveau2">

		<!-- F131 : Ajouter un pied de page (copie écran)  -->
		<a title="Accéder aux metions légales" id="link-mentions-legales" href="mentions-legales.php">Mentions légales</a> @2017 - 2018 / Developpeur :
		<?php
		// connexion à la base de données
		include('bdd/connect.php');

		// Requête d'affichage
		$sql = $bdd -> prepare("SELECT * FROM user WHERE nom != 'BOUQUET'");
		$sql -> execute();
		while($data = $sql -> fetch()){
			echo ' '.$data['prenom'].' '.$data['nom'];
		}

		?>

	</div><!-- id="footer-niveau2" -->
</footer>
<!-- FIN FOOTER -->

<!-- LIEN JAVASCRIPT -->
<script type="text/javascript" src="js/contact.js"></script>
<script type="text/javascript" src="js/fonction.js"></script>
<script type="text/javascript" src="js/fonction1.js"></script>
<script type="text/javascript" src="js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmrXsiSPpeAEytbBmJah3s5WbTKCmuNo &callback=initMap"
        async defer></script>
<script type="text/javascript" src="js/afficher_cacher_div.js"></script>

</body>
</html>