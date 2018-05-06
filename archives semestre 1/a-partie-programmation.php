<?php
// Ajoute du header
require 'php/header.php';
?>
   <div id="liseret"></div>

    <div id="contenu">
    <!--                BOUTON AFFICHER MASQUER               -->
    <span class="bouton" id="bouton_texte" onclick="javascript:afficher_cacher('texte');">&nbsp;&nbsp;Cacher le texte&nbsp;&nbsp;</span>


        <div id="texte" class="texte">

            <!-- TITRE -->
            <h1>Partie "programmation"</h1>

            <!-- IMAGE DE PRESENTATION -->
            <div id="img-presentation-prog"></div>

    <!--                BOUTON AFFICHER MASQUER               -->
            <!-- DESCRIPITION -->
            <p class="presentation">Vous trouvez dans cette rubrique plusieurs astuces relatives à la programmation web &#128516;</p>

            <!-- SECTION 1 -->
            <section>

                <!-- TITRE -->
                <h2>Tuto 1 : Création d'un formulaire en javascript</h2>

                <!-- LIEN VERS PAGE -->
                <a href="A1.php">=====>Voir le tutoriel<=====</a>

                <!-- DESCRIPTION -->
                <p>Dans ce premier tutoriel, nous allons tout simplement créer un formulaire directement en javascript. L'avantage de cette technique est de pouvoir introduire à n'importe quelle moment un element html en fonction d'un évènement du DOM. Par exemple, on pourrait introduire un formulaire que si mon curseur survole une zone de la page</p>

            </section>

            <!-- SECTION 2 -->
            <section>
                <!-- TITRE -->
                <h2>Tuto 2 : Créer votre premier serveur web avec NodeJS</h2>

                <!-- LIEN VERS PAGE -->
                <a href="A2.php">=====>Voir le tutoriel<=====</a>

                <!-- DESCRIPTION -->
                <p>NodeJS est une plateforme construite sur le moteur JavaScript V8 de Chrome qui permet de développer des applications en utilisant du JavaScript. Il se distingue des autres plateformes gràce à une approche non bloquante permettant d'effectuer des entrées/sorties (I/O) de manière asynchrone. </p>

            </section>

        </div><!-- id="texte" class="texte" -->
        
    </div><!-- id="contenu" -->
    
<?php
// Ajoute du header
include('php/footer.php');