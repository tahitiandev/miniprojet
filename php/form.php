<?php

/**

	Developpeur : Gilles HEITAA
	Date 		: 17/10/2017
	Objet 		: Automatiser la saisie des formulaires

*
*/

class formulaire {
	
	// Déclration de variable
	public $taginput = 'tag-input';


	// Constructeur
	public function __contruct(){

		// Connexion future à la base de données

	} // fin construct


	private function tagFormGeneral($contenuhtml){

		return "
		<!-- .................... DEBUT DU FORMULAIRE ...................... -->

		<div class='form-general'>
			".$contenuhtml;

	}

	// 
	public function formHaut($titreFiche, $method, $action, $autocomplete, $insertJS=''){

		if($autocomplete == true){

			return $this -> tagFormGeneral("
			<h3 class='titre-h3'>".$titreFiche."</h3>

			<form ".$insertJS." method='".$method."' action='".$action."' autocomplete='off'>
			");
		}
		if($autocomplete == false){

			return $this -> tagFormGeneral("
			
			<h3 class='titre-h3'>".$titreFiche."</h3>
			
			<form ".$insertJS." method='".$method."' action='".$action."'>");
		}

	}
	public function formBas(){

		return "
			</form>
		</div><!-- class='form-general' -->

		<!-- .................... FIN DU FORMULAIRE ...................... -->
		";
	
	} // fin fromBas

	// Ajout un tag entre chaque input
	private function entourer($contenu){

		return "
				<div class='{$this->taginput}'>
					{$contenu}

				</div><!-- class='tag-input' -->

				";
	
	} // fin entourer

	// Défini un input (fonctionne que pour le type 'text', 'email' et 'password')
	public function input($type, $name, $placeholder,$require = false, $classjs = "", $js=""){

			if($require == true){

				return $this -> entourer("
				<!-- INPUT : type=".$type." name:".$name."  -->

				<!-- MESSAGE d'erreur en cas de besoin -->
				<div class='error-".$classjs."'></div>

				<input class='form-text ".$classjs."' type='".$type."' name='".$name."' placeholder='".$placeholder." (Champ obligatoire)' ".$js." require>");
				
			}else{

				return $this -> entourer("
				<!-- INPUT : type=".$type." name:".$name."  -->
				<input class='form-text' type='".$type."' name='".$name."' placeholder='".$placeholder."'>");
				
			}

	} // fin input

	// Défini automatiquement une zone de texte (textarea)
	public function textarea($name, $placeholder, $require = false, $classjs = "", $onblur = ""){

		if($require == true){
			return $this -> entourer("
				<!-- TEXTAREA -->

				<!-- MESSAGE d'erreur en cas de besoin -->
				<div class='error-".$classjs."'></div>
				<textarea class='form-textarea ".$classjs."' name='".$name."' placeholder='".$placeholder." (Champ obligatoire)' onblur='".$onblur."' require></textarea>");
		}else{
		
			return $this -> entourer("
				<!-- TEXTAREA -->
				<textarea class='form-textarea' name='".$name."'></textarea>");
		
		}
	}

	// Défini automatiquement une liste déroulante (select)
	public function option($sujet, $first=false){

		if($first == true){

		return "			<option value=''>".$sujet."</option>
		";

		}else{
			
		return "			<option value='".$sujet."'>".$sujet."</option>
		";

		}


	}
	public function selectHaut($name){

		return "<!-- LISTE DEROULANTE, name=".$name." -->
				<select class='form-select' name='".$name."'>
		";

	}
	public function selectBas(){

		return "		</select>
		";

	}
	// Défini le bouton
	public function button($name, $texteaffiche, $classe, $evenjs=""){

		return "
				<!-- bouton : ".$texteaffiche." -->
				<button class='".$classe."' name='".$name."' $evenjs>".$texteaffiche."</button>
				";

	}


}