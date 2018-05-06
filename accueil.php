<?php
// Ajoute du header
include('php/header.php');
?>

    <!--DEBUT Partie du slider -->
        <div id="slider">

           <figure>
           
              <a href="b-partie-designe.php"><img src="images/slider/design.jpg" alt="Design" title="Design"></a>
             <a href="a-partie-programmation.php"><img src="images/slider/html.png" alt="HTML 5" title="HTML 5"></a>
               <a href="b-partie-designe.php"><img src="images/slider/css.png" alt="CSS 3" title="CSS 3"></a>
              <a href="b-partie-designe.php"><img src="images/slider/Adobe.jpg" alt="Adobe Photoshop et Illustrator" title="Adobe Photoshop et Illustrator"></a>
              <a href="a-partie-programmation.php"><img src="images/slider/programmation.jpg" alt="Programmation" title="Programmation"></a>

          </figure>

        </div><!-- id="slider" -->
    <!--FIN Partie du slider -->

    <div id="liseret"></div>

    <div id="contenu">

        <h1>Accueil</h1>

        <!-- PRESENTATION -->
        <article>
            <span>Bonjour et bienvenu &#128516;&#128519;&#128526;&#128523;</span>
            Notre site est destiné aux développeurs web et aux personnes qui souhaitent apprendre un langage de programmation. Il propose un ensemble de tutoriels, d'astuces sur l'utilisation de nouvelle technologie (exemple: nodejs, canvas ...). L'avantage de notre site est qu'il propose une description écrite et visuel via des images fixes ou animés (gif). Le chargement de la page se fait donc plus rapidement que les sites qui propose des tutoriels vidéos. Nous créons ce projet car les technologies évolues rapidement. L'objectif est donc de mettre à disposition aux grands publics, un site de référence.
        </article>

        <!-- SECTION 1 -->
        <section>

            <!-- TITRE -->
            <h2>Les différents outils utilisés</h2>

            <!-- PRESENTATION -->
            <article>
                De manière à utiliser correctement cette plateforme, l'installation de certain outil est nécéssaire. 
            </article>

            <!-- DESCRIPTION -->
            <ul>
                <li><strong>Environnement</strong> : Windows, Mac, Linux</li>
                <li><strong>Editeur de texte</strong> : NodePad++, sublimeText, Eclipse ... </li>
                <li><strong>Logiciel de maquettage</strong> : GIMP, Adobe, Photoshop</li>
            </ul>
        </section>

        <!-- SECTION 2 -->
        <section>

            <!-- TITRE -->
            <h2>Les différents languages que vous allez apprendre</h2>

            <!-- PRESENTATION -->
            <article>
                Dans le déveoppement web, les developpeurs sont souvent ammenés à utiliser différent langege de programmation. Certain sert à structurer et ordonner ta page, d'autre à la mise en forme ...
            </article>

            <!-- DESCRIPTION -->
            <ul>
                <li><strong>HTML5</strong> : Pour la partie structure du site</li>
                <li><strong>CSS3</strong> : Concerne la partie ergonomie</li>
                <li><strong>Javascript</strong> : Cette partie permet d'intéragir avec les élements du DOM</li>
                <li><strong>PHP</strong> : Permet de rendre le site dynamique</li>
            </ul>

        </section>

        <!-- SECTION 2 -->
        <section>

            <!-- TITRE -->
            <h2>Les sites de références</h2>

            <!-- PRESENTATION -->
            <article>
                Afin de rester cohérent avec ce qui se fait ailleur, certains points ont principalement été vérifiés sur les sites listés ci-dessous :
            </article>

            <!-- DESCRIPTION -->
            <ul>
                <li><a href="http://netpresta-formation.fr">http://netpresta-formation.fr</a></li>
                <li><a href="https://www.w3schools.com/">https://www.w3schools.com/</a></li>
                <li><a href="https://www.grafikart.fr/">https://www.grafikart.fr/</a></li>
                <li><a href="https://openclassrooms.com/">https://openclassrooms.com/</a></li>
            </ul>

        </section>
    </div><!-- contenu -->
    
<?php
// Ajoute du header
include('php/footer.php');