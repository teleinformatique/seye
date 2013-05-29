<html>
    <head>
		<script type="text/javascript">
			function montrer(element){
				var les_elements = new Array("pieces","autres");
				
				for(var i=0; i<les_elements.length;i++)
					document.getElementById(les_elements[i]).style.display = 'none';
					document.getElementById(element).style.display = 'block';
				
			}
		</script>
	
    </head>
    <body>
		<div id="sous_menu">
			<li><a href="javascript:montrer('pieces')">Déclaration de Pièces</a></li>
			<li><a href="javascript:montrer('autres')">Déclaration d'autres objets</a></li>
		</div>
		<form id="pieces" method="post" action="../fonctions/declaration_objets_perdu_piece.php" enctype="multipart/form-data" style="display:none">
		<fieldset id="declaration">
		 <fieldset class="CIN" >
		   <legend>Déclaration de Perte piéces</legend>
			  
			  <p><input type="text" name="numeroPiece"   class='inputD' placeholder="Numero de la Pièce" required /></p>
			  <p><input type="text" name="nomTitulaire" class='inputD'   placeholder="Nom Titulaire" required /> </p>
			  <p><input type="text" name="prenomTitulaire" placeholder="Prénom Titulaire" class='inputD' required /> </p>   
		 </fieldset>
				
		  <fieldset class="personne" >
		   <legend>Mes Contacts</legend>
			  
			  <p><input type="text" name="nom"  class='inputD'  placeholder="nom" required /></p>
			  <p><input type="text" name="prenom"  class='inputD'  placeholder="prenom" required /> </p>
			  <p><input type="tel" name="telephone" class='inputD' placeholder="telephone" required /></p>
			  <p><input type="email" name="email" class='inputD' placeholder="votre@dresse.email" size="35" required /></p>
			  
		  </fieldset>
		  <input type="hidden" />
				<p>
				  <input class="clik" type="submit" name="valider" placeholder="valider" />
				  <input class="clik" type="reset" name="effacer" placeholder="Réinitialiser"/>
				</p>
		 </fieldset>
		  
		   
		</form>
		
		<form id="autres" method="post" action="../fonctions/declaration_objet_perdu_autres.php" enctype="multipart/form-data">
		<fieldset>
		 <fieldset class="CIN" >
		   <legend>Déclaration de Perte d'autres objets</legend>
			  
			  <p><input type="text" name="marque"  class='inputD'  placeholder="marque" required /></p>
			  <p><input type="text" name="modele"  class='inputD'  placeholder="modele" required /> </p>
			  <p><input type="text" name="couleur" class='inputD' placeholder="couleur" required /> </p>   
			  <p><input type="file" name="photo" placeholder="photo" /></p>
		 </fieldset>
				
		  <fieldset class="personne" >
		   <legend>Mes Contacts</legend>
			  
			  <p><input type="text" name="nom"  class='inputD'  placeholder="nom"  required/></p>
			  <p><input type="text" name="prenom"   class='inputD' placeholder="prenom" required /> </p>
			  <p><input type="tel" name="telephone" class='inputD' placeholder="telephone" required /></p>
			  <p><input type="email" name="email" class='inputD' placeholder="votre@dresse.mail" size="35" required /></p>
			  
		  </fieldset>
		  <input type="hidden" />
				<p>
				  <input class="clik" type="submit" name="valider" placeholder="valider" />
				  <input class="clik" type="reset" name="effacer" placeholder="Réinitialiser"/>
				</p>
		 </fieldset>
		  
		   
		</form>
     
    
    </body>
    

</html>

	
