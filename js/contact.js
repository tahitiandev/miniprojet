/**

	Date 		: 18/10/2017
	Objet		: Vérifie que les champs obligatoires sont saisis 

*
*/

/* Vérifie si le champ "Nom + Prénom" est rempli */
function sivideName(champ){
	
	var a = document.querySelector('.confirm-name');
	
	if(a.value == ""){
		
		document.querySelector('.error-confirm-name').innerHTML = "<div class='error'>Merci de bien vouloir remplir ce champ</div>";
		a.classList.add('champinccorect');
		return false;
		
	}else{

		a.classList.add('champcorrect');
		a.classList.remove('champinccorect');
		document.querySelector('.error-confirm-name').innerHTML = "<div class='error'></div>";
		return true;
	}
	
}

/*Mettre en majuscule le champ nom + Prénom*/
function majusculeName(_champ){

	_champ.value = _champ.value.toUpperCase();

	document.querySelector('.confirm-name').classList.add('champcorrect');
	document.querySelector('.confirm-name').classList.remove('champinccorect');

	if(_champ.value == ""){
	document.querySelector('.confirm-name').classList.remove('champcorrect');
	document.querySelector('.confirm-name').classList.add('champinccorect');
		
	}

}

/*Vérifie si tous les champs sont du type numérique*/
function sinumeriqueTel(_champ){

	a = _champ.value
	
	if(isNaN(a)){
		document.querySelector('.error-confirm-telephone').innerHTML = "<div class='error'>Ce champ ne doit comporter aucune lettre</div>";
		document.querySelector('.confirm-telephone').classList.remove('champcorrect');
		document.querySelector('.confirm-telephone').classList.add('champinccorect');
		document.querySelector('.confirm-telephone').value = "";

	}else{
		document.querySelector('.error-confirm-telephone').innerHTML = "<div class='error'></div>";
		document.querySelector('.confirm-telephone').classList.add('champcorrect');
		document.querySelector('.confirm-telephone').classList.remove('champinccorect');
	}

}


/* Vérifier l'adresse mail par la méthode REGEX */
function validateEmail(email) {

  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

return re.test(email);
				}

function simailok() {

  var email = document.querySelector('.confirm-email').value;
  var resultat = document.querySelector('.error-confirm-email');


  if (validateEmail(email)) {

  	result.innerHTML = "";
  	document.querySelector('.confirm-email').classList.add('champcorrect');
  	document.querySelector('.confirm-email').classList.remove('champincorrect');

  	return true;

  } else {

  	document.querySelector('.confirm-email').classList.remove('champcorrect');
  	document.querySelector('.confirm-email').classList.add('champincorrect');
  	result.innerHTML = "<div class='error'>Le mail est invalide</div>";
  	return false;
				  	
  }
}


/* Vérifie si le champ "message" est rempli */
function sivideMessage(champ){
	
	var c = document.querySelector('.confirm-msg');
	
	if(c.value == ""){
		
		document.querySelector('.error-confirm-msg').innerHTML = "<div class='error'>Merci de bien vouloir remplir ce champ</div>";
		c.classList.remove('champcorrect');
		c.classList.add('champinccorect');
		return false;
		
	}else{

		c.classList.add('champcorrect');
		c.classList.remove('champinccorect');
		document.querySelector('.error-confirm-msg').innerHTML = "<div class='error'></div>";
		return true;
	}
	
}

/* DEBUT CAPTCHA MATHEMATIQUE*/

function confirmCaptcha(){

	var answer = document.getElementById("answer").value;
	var digit1 = parseInt(document.getElementById("digit1").innerHTML);
	var digit2 = parseInt(document.getElementById("digit2").innerHTML);
	var sum = digit1 + digit2;


	if(answer == ""){

		document.querySelector('.status').innerHTML = "<div class='error'>Veuillez saisir le résultat de la réponse ci-dessous</div>";
		document.querySelector('.rpdcaptach').classList.remove('champcorrect');
		document.querySelector('.rpdcaptach').classList.add('champinccorect');
		return false;

	}else if(answer != sum){

		document.querySelector('.status').innerHTML = "<div class='error'>La réponse est incorecte</div>";
		document.querySelector('.rpdcaptach').classList.remove('champcorrect');
		document.querySelector('.rpdcaptach').classList.add('champinccorect');
		return false;

	}else{


		document.querySelector('.status').innerHTML = "<div class='error'></div>";
		document.querySelector('.rpdcaptach').classList.remove('champinccorect');
		document.querySelector('.rpdcaptach').classList.add('champcorrect');
		return true;

	}
}

function ChoixNum(){

	var rand_num1 = Math.floor(Math.random() * 10) + 1;
	var rand_num2 = Math.floor(Math.random() * 10) + 1;
	document.getElementById("digit1").innerHTML = rand_num1 + ' +';
	document.getElementById("digit2").innerHTML = rand_num2;

}
/* FIN CAPTCHA MATHEMATIQUE*/

function btnAnnuler(){

	window.location.replace('contact.php');

}

/*fonction pour définir la date et l'heure de l'envoi*/
function MomentDeLenvoi(){
	var maintenant  = new Date();
	var jour        = maintenant.getDate();
	var mois        = maintenant.getMonth()+1;
	var annee       = maintenant.getFullYear();

	var dateEnvoi   =  jour + "/" + mois + "/" + annee;

	var inputdate = '<input type="hidden" name="receptionDate" value="' + dateEnvoi + '">';

	var heures = maintenant.getHours();
	var minutes = maintenant.getMinutes();
	var seconds = maintenant.getSeconds();

	var temps = heures + ":" + minutes + ":" + seconds;

	var inputheure ='<input type="hidden" name="receptionHeure" value="' + temps + '">';


	document.getElementById("dateenvoi").innerHTML = inputdate + inputheure;

}


/*fonction pour afficher une horloge dynamique dans le formulaire */
setInterval(function(){
    document.getElementById('horloge').innerHTML = new Date().toLocaleTimeString();
}, 1000);


/* Lanchement de toutes les fonctions ci-dessus */
function confirmation(f){
	
	var nomok = sivideName(f.name);
	var emailok = simailok();
	var msgok = sivideMessage(f.message);
	var captchok = confirmCaptcha(f.envoyer);

	if(nomok && emailok && msgok && captchok){

		console.log('Les conditions ont bien été remplies')
		MomentDeLenvoi();

		return true;
		
	}else{
		
		/*alert('Veuillez remplir les champs obligatoires');	*/
		return false;
	
	}
}