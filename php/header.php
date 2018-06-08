<!DOCTYPE html>
<html lang="fr">
<head>

	<!-- general -->
    <meta charset="utf-8" />
    <title><?php require 'php/title.php'; ?></title>

    <!-- responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Asap+Condensed" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Hanalei" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Faster+One|Sniglet" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="css/contact.css" />
    <link rel="stylesheet" href="css/message.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/reception-contact.css" />
    <link rel="stylesheet" href="css/mentions-legales.css" />
    <?php
    $url = substr($_SERVER['REQUEST_URI'],-11);

    if($url != "accueil.php"){
        echo '<link rel="stylesheet" href="css/pages.css" />';
    }
    ?>

    <!-- Zone d'impression -->
    <link rel="stylesheet" type="text/css" media="print" href="css/print.css" />
    
    <!-- icone -->
    <link rel="icon" href="images/logo/Fichier%201@0.5x.png">

    <!-- js -->
    <!-- TOUT LES LIENS JS SONT DANS LE FOOTER CAR CERTAIN SCRIPT NE FONCTIONNE QUE SI ON LE CHARGE A LA FIN -->

    <!-- class php -->
    <?php
    	require 'form.php';
    ?>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-68095296-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-68095296-2');
    </script>

</head>
<body onload="ChoixNum();">

<!-- DEBUT HEADER -->
    <header>
        <a href="accueil.php"><div id="centre_img"><img class="img_header" src="images/header/plan-de-travail-1.png"/></div></a>
    </header>
<!-- FIN HEADER -->

<!-- DEBUT MENU -->
      <nav id="impression">
        <label for="menu-mobile" class="menu-mobile">Menu</label> <!--  -->
        <input type="checkbox" id="menu-mobile" role="button"> 
        <ul>
          <!--Partie Accueil-->
            <li class="menu-contact"><a href="accueil">Accueil</a>
                <ul class="submenu">                
                </ul>
            </li>
            <?php
            require 'bdd/connect.php';
            $sqlmenu = $bdd -> prepare("SELECT * FROM rubrique");
            $sqlmenu -> execute();
            while($menu = $sqlmenu -> fetch()){

                echo '<li class="menu-html"><a href="tutoriel-n°'.$menu['idrub'].'">'.$menu['intitulerub'].'</a>';


                    $idrub = $menu['idrub'];

                    $sqlssmenu = $bdd -> prepare("SELECT * FROM article WHERE rubrique =:idrub");
                    $sqlssmenu -> execute(array("idrub" => $idrub));

                    echo '<ul class="submenu">';
                    while($ssmenu = $sqlssmenu -> fetch()){

                        echo '<li><a href="description-n°'.$ssmenu['idart'].'">'.$ssmenu['codeart'].' - '.$ssmenu['titreart'].'</a></li>';

                    }
                    echo '</ul>';
                    $sqlssmenu -> closeCursor();


                echo '</li>';

            }//while
            $sqlmenu -> closeCursor();

            ?>

           <li class="menu-contact"><a href="contact">Contact</a></li>
           <li class="menu-contact" style="background: green;"><a target="_blank" href="backoffice">BACKOFFICE</a></li>
            <li class="menu-contact"></li> 
        </ul>
    </nav>  
<!-- FIN MENU -->