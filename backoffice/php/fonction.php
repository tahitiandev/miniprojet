<?php

/**
*
	 Date : 05/07/2017
	 Partie : FONCTION
	 Description : Permet de remplacer certaine caractère
	 qui induit des erreurs tel que 'les retours à la ligne'
	 ou encore les espaces
*
**/

function speciaux($word)

{

	$word = str_replace(' ', '&nbsp;', $word);
	$word = str_replace("'","&apos;",$word);  
	$word = str_replace("\r\n", "<br>", $word); 
	$word = str_replace("ë", "&#235", $word); 
	$word = str_replace("é", "&#233", $word); 
	$word = str_replace("è", "&#232", $word); 
	$word = str_replace("ê", "&#234;", $word); 

	return $word;



}

// Description : fait l'inverse

function rspeciaux($word){

	$word = str_replace('&nbsp;', ' ', $word);
	$word = str_replace("&apos;","'",$word);  
	$word = str_replace("<br>","\r\n", $word); 
	$word = str_replace("&#235","ë", $word); 
	$word = str_replace("&#233","é", $word); 
	$word = str_replace("&#232","è", $word); 
	$word = str_replace("&#234;","ê", $word); 
	return $word;

}