/* 
	Tache : F177 : Affichage information largeur page article B4 (copie ecran page) 
*/

	/* Création de la fonction*/
	function dimensionWindows(){

		var hauteur = (document.body.clientHeight);
		var largeur = (document.body.clientWidth);


		/*Message d'affichage*/
		var a = "<div id='conteneur-b4'>";
		var b = "<div><strong>Les dimensions de la fenêtre</strong></div>";
		var c = "<div>La hauteur est de : " + hauteur + "</div>";
		var d = "<div>La largeur est de : " + largeur + "</div>";
		var e = "</div>"; 

		document.getElementById("dimension").innerHTML = a + b + c + d + e;

	}
	/*Et on execute*/
	dimensionWindows();