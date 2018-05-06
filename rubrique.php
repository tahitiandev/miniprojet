<?php
// Ajoute du header
require 'php/header.php';
?>
   <div id="liseret"></div>

    <div id="contenu">

        <div id="texte" class="texte">

            <!-- TITRE -->
            <?php
            // Connexion à la base de donnnées
            require 'bdd/connect.php';

            $id = $_GET['id'];

            // Requête
            $sqltitre = $bdd -> prepare("SELECT * FROM rubrique WHERE idrub = :id");
            $sqltitre -> execute(array("id" => $id));
            $titre = $sqltitre -> fetch();
            echo '<h1>'.$titre['intitulerub'].'</h1>';

            // IMAGE DE PRESENTATION
            echo '<div id="img-presentation-prog" style="background:url(images/articles/'.$titre['newname'].') center; background-attachment: fixed;"></div>';

            // DESCRIPITION
            echo '<p class="presentation">'.$titre['descriptionrub'].'</p>';

            // Fermeture de la connexion
            $sqltitre -> closeCursor();

            // Requete
            $descrip = $bdd -> prepare("
            	SELECT *
            	FROM rubrique, article 
            	WHERE rubrique.idrub = article.rubrique
            	AND idrub = :id");
            $descrip -> execute(array("id" => $id));
            $num=1;
            while($description = $descrip -> fetch()){

            	// SECTION
            	echo '<section>';

            	// TITRE
            	echo '<h2>Tuto '.$num.' : '.$description['titreart'].'</h2>';

            	// LIEN VERS PAGE
            	echo '<a href="sous-rubrique.php?id='.$description['idrub'].'">=====>Voir le tutoriel<=====</a>';

            	// DESCRIPTION
            	echo '<p>'.$description['descriptionart'].'</p>';

            	echo '</section>';

            	$num++;

            }

            // Fermeture de la connexion
            $descrip -> closeCursor();

            ?>

        </div><!-- id="texte" class="texte" -->
        
    </div><!-- id="contenu" -->
    
<?php
// Ajoute du header
include('php/footer.php');