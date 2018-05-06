<?php
/**

	Developpeur : Gilles HEITAA
	Date 		: 27/10/2017
	Objet 		: Automatiser le titre de la page par le nom du fichier en cours

*
*/


$chemincomplet = $_SERVER['SCRIPT_FILENAME'];
$cheminInvalide = dirname($chemincomplet);
$NomFichier = str_replace($cheminInvalide, '', $chemincomplet);
$NomFichier = str_replace('.php', '', $NomFichier);
$NomFichier = str_replace('/', '', $NomFichier);
$NomFichier = str_replace('-', ' ', $NomFichier);
$NomFichier = ucfirst($NomFichier);


echo $NomFichier;