<?php
// Ajoute du header
include('php/header.php');
?>

<style>
#conteneur-b4{
    display: block;
    margin: auto;
    width: 400px;
    padding: 12px;
    border:1px solid red;
    background: red;
    color: yellow;
    font-size: 120%;
}
</style>


     <div id="liseret"></div>

        <div id="contenu">

            <!-- TITRE DE LA PAGE -->
            <h1>LA PAGE B4</h1>


            <section>

                <!-- PRESENTATION -->
                <p class="presentation">
                Cette page B4 ne sert qu'a répondre à la tache "F177 : Affichage information de la largeur de la page article B4 (copie écran)"
            </p>

            <p>Ci-dessous, l'extrait du script javascript qui m'a permit d'avoir la largeur et la hauteur de la fenetre</p>


<textarea style="height: 230px;">
/*Déclaration des variables*/
var hauteur = (document.body.clientHeight);
var largeur = (document.body.clientWidth);


/*Message d'affichage*/
document.write("<div id='conteneur-b4'>");
document.write("<div><strong>Les dimensions de la fenêtre</strong></div>")
document.write("<div>La hauteur est de : " + hauteur + "</div>");
document.write("<div>La largeur est de : " + largeur + "</div>");
document.write("</div>"); 
</textarea>


        <p>Ce qui donne le résultat suivant</p>

        <span id="dimension"></span>

            </section>
        </div><!-- id="contenu" -->
    
<?php
// Ajoute du header
include('php/footer.php');