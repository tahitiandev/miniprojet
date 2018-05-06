<?php
// Ajoute du header
include('php/header.php');
?>

    <!--                IMPRESSION               -->
      
        <!--Bouton d'impression-->

            <form class="form-bouton">
               <input class="bouton" type="button" onclick="imprimer_page()" value="Imprimer cette page" />
            </form>

        <!--SCRIPT du Bouton d'impression-->
        <script type="text/javascript">
            function imprimer_page()
            {window.print();}
        </script>

    <!--                IMPRESSION               -->

   <!-- IMPRIMABLE -->
    <div id="liseret"></div>

   <!-- IMPRIMABLE -->
    <div id="contenu">
    
        <!-- IMPRIMABLE -->
        <h1>Créer un formulaire en Javascript</h1>
        <!-- IMPRIMABLE -->
        <p  class="presentation">Dans ce premier tutoriel, nous allons tout simplement créer un formulaire directement en javascript. L'avantage de cette technique est de pouvoir introduire à n'importe quelle moment un element html en fonction d'un évènement du DOM. Par exemple, on pourrait introduire un formulaire que si le curseur survole une zone de la page &#128516;</p>


        <!-- IMPRIMABLE -->
        <section>


            <!-- ETAPE 1 -->
            <h2>1 - Préparer votre environnement</h2>

            <!-- DESCRIPTION -->
            <p>Pour notre exemple, nous allons créer un dossier "formulaireJS"</p>
            <a href="images/pages/A01-01.png"><img alt="Image descriptif" src="images/pages/A01-01.png"></a>

            <p>et nous allons insérer un fichier "index.html"</p>
            <a href="images/pages/A01-02.png"><img alt="Image descriptif" src="images/pages/A01-02.png"></a>

            <!-- ETAPE 2 -->
            <h2>2 - Ouvrir le fichier index.html</h2>

            <!-- DESCRIPTION -->
            <p>Vous allez maintenant ouvrir votre fichier avec votre éditeur préféré. De préférence, utiliser un éditeur dédié à la programmation (exemple nodePad++, sublimeText ...). Pour ma part, j'utiliserai sublime text.<br>
            Une fois le fichier ouvert, ajoutez les balises de base d'une page web (head, body footer meta etc.)</p>

<textarea style="height: 180px;">
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>

</body>
</html>
</textarea>  

            <!-- ETAPE 3 -->
            <h2>3 - Créer le formulaire</h2>

            <!-- DESCRIPTION -->
            <p>Pour créer un formulaire, ouvrez une balise "script" entre les balises "body" de votre page web et utiliser la propriété "document.writeln" pour écrire du html avec du javascript.</p>

            <p>Ci-dessous, le script pour créer un formulaire avec deux champs de saisis (login + password), et un bouton de confirmation</p>
<textarea style="height: 180px;">
<script>
document.writeln('<form>');
document.writeln('<h3>Login</h3>');
document.writeln('<input type="text" name="login">');
document.writeln('<h3>Password</h3>');
document.writeln('<input type="text" name="password"><br><br>');
document.writeln('<input type="submit" name="submit" value="Confirmer">');
document.writeln('</form>');
</script>
</textarea>

            <p>Ci-dessous le résultat visuel</p>

            <a href="images/pages/A01-03.png"><img alt="Image descriptif" src="images/pages/A01-03.png"></a>

            <!-- ETAPE 4 -->
            <h2>4 - Affiche le code suite à un évènement</h2>

            <!-- DESCRIPTION -->
            <p>Maintenant que nous savons créer un formulaire avec du javascript, nous allons le faire afficher 
            qu'après le déclenchement d'un évènement.</p>

            <p>A titre d'exemple, nous allons créer un carré avec un id="zone" avec les propriétés css ci-dessous</p>

<textarea style="height: 230px;">
<style>
#zone{
    height: 300px;
    line-height: 300px;
    width: 300px;
    background: red;
    color: white;
    text-align: center;
    padding: 2%;
    cursor: pointer;
}
</style>
</textarea>

        <p>Puis nous rajouterons une div dans notre document html avec un identifiant id="zone" comme ci-dessous</p>

<textarea style="height: 220px;">
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>

    <div id="zone">Clique pour voir le formulaire</div>

</body>
</html>
</textarea>  

        <p>Ce qui nous le résultat suivant</p>

        <a href="images/pages/A01-04.png"><img alt="Image descriptif" src="images/pages/A01-04.png"></a>

        <p>Nous allons maintenant modifier notre script javascript pour afficher notre formulaire après avoir cliqué sur une partie (Evènement "onclick" en javascript) de la zone de la div</p>


<textarea style="height: 240px;">
<script type="text/javascript">
document.getElementById("zone").onclick = function (){

    document.writeln('<form>');
    document.writeln('<h3>Login</h3>');
    document.writeln('<input type="text" name="login">');
    document.writeln('<h3>Password</h3>');
    document.writeln('<input type="text" name="password"><br><br>');
    document.writeln('<input type="submit" name="submit" value="Confirmer">');
    document.writeln('</form>');
}
</script>
</textarea> 


        <p>Ce qui donne le résultat suivant</p>

        <a href="images/pages/A01-05.gif"><img alt="Image descriptif" src="images/pages/A01-05.gif"></a>






        </section>
    </div>
    
<?php
// Ajoute du header
include('php/footer.php');