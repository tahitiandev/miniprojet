/* 
	F148 : Article A2 avec Date mise à jour fichier (copie ecran page)
*/
	/* Création de la fonction*/
	function laDateDeMiseAjour(ladate){

		document.getElementById("dateMajPageA2").innerHTML = "La date de mise à jour : " + ladate;

	}
	/*Et on execute*/
	laDateDeMiseAjour('16/01/2018');