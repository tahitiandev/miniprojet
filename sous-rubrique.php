<?php
// Ajoute du header
include('php/header.php');
?>

   <!-- IMPRIMABLE -->
    <div id="liseret"></div>

   <!-- IMPRIMABLE -->
    <div id="contenu">
 
        <!-- TITRE -->
        <?php
        // Connexion à la base de donnnées
        require 'bdd/connect.php';

        $id = $_GET['id'];

        // Requête
        $sqltitre = $bdd -> prepare("SELECT * FROM article WHERE idart = :id");
        $sqltitre -> execute(array("id" => $id));
        $titre = $sqltitre -> fetch();
        echo '<h1>'.$titre['titreart'].'</h1>';

        // DESCRIPITION
        echo '<p class="presentation">'.$titre['descriptionart'].'</p>';

        // Fermeture de la connexion
        $sqltitre -> closeCursor();

        ?>

        <!-- IMPRIMABLE -->
        <section>

        <?php
        // Requete
        $descrip = $bdd -> prepare("
            SELECT * FROM titre WHERE article = :id
            ");
        $descrip -> execute(array("id" => $id));
        $num=1;
        while($description = $descrip -> fetch()){

            // ETAPE 1
            echo '<h2>'.$num.' - '.$description['libelletitre'].'</h2>';

            // Variable cible
            $titre = $description['idtitre'];

            
            $last = $bdd -> prepare("
                SELECT * FROM detail WHERE titre = :titre
            ");

            $last -> execute(array('titre' => $titre));

            while($data = $last ->fetch()){

                // Description
                echo '<p>'.$data['descriptiondeg'].'</p>';


                // image
                echo '<a href="images/articles/'.$data['imagedet'].'"><img alt="Image descriptif" src="images/articles/'.$data['imagedet'].'"></a>';


            }
            $last -> closeCursor();

           $num++;

        }

        // Fermeture de la connexion
        $descrip -> closeCursor();

        ?>

        </section>
    </div>
    
<?php
// Ajoute du header
include('php/footer.php');