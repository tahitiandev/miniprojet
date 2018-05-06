<?php include('php/header.php'); ?>

<div id="container-form">

	<div class="form-part">

	<!-- .................... DEBUT DU FORMULAIRE ...................... -->

		<div class='form-general'>
			
			<h3 class='titre-h3'>Formulaire de contact</h3>

			<form onsubmit="return confirmation(this)" method='POST' action='message.php' autocomplete='off'>

				<div class='tag-input'>
					
				<!-- INPUT : type=text name:name  -->

				<!-- MESSAGE d'erreur en cas de besoin -->
				<div class='error-confirm-name'></div>

				<input class='form-text confirm-name' type='text' name='name' placeholder='Votre nom et votre prénom (Champ obligatoire)' onblur="sivideName(this)" onchange="majusculeName(this)" require>

				</div><!-- class='tag-input' -->

				
				<div class='tag-input'>
					
				<!-- INPUT : type=text name:telephone  -->

				<!-- MESSAGE d'erreur en cas de besoin -->
				<div class='error-confirm-telephone'></div>

				<input class='form-text confirm-telephone' type='text' name='telephone' placeholder='Téléphone (Champ obligatoire)' onchange="sinumeriqueTel(this)" require>

				</div><!-- class='tag-input' -->
				
				<div class='tag-input'>
					
				<!-- INPUT : type=email name:email  -->

				<!-- MESSAGE d'erreur en cas de besoin -->
				<div class='error-confirm-email' id='result'></div>

				<input class='form-text confirm-email' type='email' name='email' placeholder='E-mail (Champ obligatoire)' onblur="simailok();" require>

				</div><!-- class='tag-input' -->

				<!-- - html : page contact formulaire : sujet du message : liste de choix au lieu de liste à puces -->
				<div id="contact-radio">
					<table>
						<tr>
							<th colspan="2">Sujet du message</th>
						</tr>
						<tr>
							<td id="radio-choix">
								<input type="radio" name="sujet" value="Demande de contact">
							</td>
							<td>
								Demande de contact
							</td>
						</tr>
						<tr>
							<td><input type="radio" name="sujet" value="Demande d'information"></td>
							<td>Demande d'information</td>
						</tr>
						<tr>
							<td><input type="radio" name="sujet" value="Demande d'information"></td>
							<td>Demande d'information</td>
						</tr>
						<tr>
							<td><input type="radio" name="sujet" value="Suggestion d'amélioration"></td>
							<td>Suggestion d'amélioration</td>
						</tr>
					</table>
				</div><!-- id="contact-radio" -->
		
				<div class='tag-input'>
					
				<!-- TEXTAREA -->

				<!-- MESSAGE d'erreur en cas de besoin -->
				<div class='error-confirm-msg'></div>
				<textarea class='form-textarea confirm-msg' name='message' placeholder='Votre message (Champ obligatoire)' onblur='sivideMessage(this)' require></textarea>

				</div><!-- class='tag-input' -->

				<div class="status"></div><strong>Securité captcha : </strong><span class="captach" id="digit1"></span><span class="captach" id="digit2"></span> <input type="text" id="answer" class="rpdcaptach" /><br><br>

				<!-- AJOUT DE LA DATE ET DE L'HEURE APRES VALIATION DU FORMULAIRE -->
				<span id="dateenvoi"></span>
				
				<!-- AFFICHER UNE HORLOGE POUR VOIR L'HEURE D'ENVOIE -->
				<span id="horloge"></span>

				<!-- bouton : Envoyer -->
				<button title="Envoyer" class='btn-envoyer' name='envoyer' onclick="confirmCaptcha();">Envoyer</button>
						
				<input type="reset" name="reset" title="Annuler la saisie" class="btn-effacer" value="Effacer">

			</form>

		</div><!-- class='form-general' -->

		<!-- .................... FIN DU FORMULAIRE ...................... -->
	
	</div><!-- form-part -->
	<div class="form-part">

		<div id="map"></div>
		
	</div><!-- form-part -->
		
</div><!-- id="container-form" -->


<?php include('php/footer.php');