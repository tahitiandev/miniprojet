<?php
// Ajoute du header
include('php/header.php');
?>

<script type="text/javascript"></script>

    <div id="liseret"></div>

        <div id="contenu">

            <!-- F148 : Article A2 avec Date mise à jour fichier (copie ecran page) -->
            <div id="dateMajPageA2"></div>
            <script>
                function laDateDeMiseAjour(ladate){

                    document.getElementById("dateMajPageA2").innerHTML = "La date de mise à jour : " + ladate;

                }
                /*Et on execute*/
                laDateDeMiseAjour('16/01/2018');
            </script>


            <!-- TITRE DE LA PAGE -->
            <h1>Initiation à NodeJS</h1>

            <!-- PRESENTATION -->
            <p class="presentation">
            NodeJS est une plateforme construite sur le moteur JavaScript V8 de Chrome qui permet de développer des applications en utilisant du JavaScript. Il se distingue des autres plateformes gràce à une approche non bloquante permettant d'effectuer des entrées/sorties (I/O) de manière asynchrone.
            </p>

            <!-- SOURCE DE DONNEES -->
            <div class="source">Source : <a href="https://www.grafikart.fr/formations/nodejs/nodejs-intro">https://www.grafikart.fr/formations/nodejs/nodejs-intro</a></div>

            <section>

                <!-- ETAPE 1 -->
                <h2>1 - Télécharger l'excécutable</h2>

                <p>Rendez-vous sur le site de nodeJs pour télécharger l'excécutable <a href="https://nodejs.org/en/">https://nodejs.org/en/</a></p>
                <p>Ou Télécharger directement en cliquant sur le lien suivant : <a href="https://nodejs.org/dist/v8.9.2/node-v8.9.2-x64.msi">Télécharger</a></p>

                <a href="images/pages/A02-01.gif"><img src="images/pages/A02-01.gif"></a>

                <!-- ETAPE 2 -->
                <h2>2 - Installer NodeJs</h2>

                <p>L'installation se fait facilement, cliquez "suivant" sur chaque étape demandée et acceptez le contrat de licence</p>
                <a href="images/pages/A02-02.gif"><img src="images/pages/A02-02.gif"></a>

                <!-- ETAPE 3 -->
                <h2>3 - Préparer votre environement de travail</h2>

                <p>A titre d'exemple, créez un dossier "nodejs" à la racine de votre serveur web local. Pour ma part, j'utilise wamp. J'ai donc créé le dossier à l'adresse suivante : "C://wamp/www"<br>
                Nous allons créer notre premier serveur web. Créer un fichier "server.js" à l'intérieur de votre dossier "nodejs". Puis ouvrez le dans votre éditeur de texte préférer (ex: NotePad++)</p>

                <a href="images/pages/A02-03.png"><img src="images/pages/A02-03.png"></a>

                <!-- ETAPE 4 -->
                 <h2>4 - Exemple d'utilisation de nodeJs</h2>

                 <p>"require" consiste à faire appel à la bibliothèque de NodeJS</p>
                 <p>"require('http')" fait appel à la bibliothèque pour obtenir un serveur web</p>
                 <p>Ici, notre serveur écoute le port "8080" et une fois lancé, l'invite de commande affichera un message "Le serveur est connecté au port 8080"</p>

<textarea>
var http = require('http');

var httpServer = http.createServer(function(req,res){
    console.log('Le serveur est connecté au port 8080');
});

httpServer.listen(8080);

</textarea>         
                <!-- ETAPE 5 -->
                <h2>5 - Création du serveur nodejs</h2>

                <a href="images/pages/A02-04.gif"><img src="images/pages/A02-04.gif"></a>

                <!-- ETAPE 6 -->
                <h2>6 - Lancer votre serveur sur un navigateur web</h2>

                <p>Pour tester votre serveur, ouvrez votre invite de commande en cliquant sur les touches "win"+"R"</p>
                <p>Aller à la racine de votre application nodejs à l'aide la commande "CD"<br>
                Dans mon exemple j'ai fais "cd /wamp/www/nomdufichier"</p>
                <p>Pour lancer l'application utilisation la commande "node" suivi du nom de l'application. Mon exemple "node server.js"</p>

                <a href="images/pages/A02-05.gif"><img src="images/pages/A02-05.gif"></a>

            </section>
        </div><!-- id="contenu" -->
    
<?php
// Ajoute du header
include('php/footer.php');