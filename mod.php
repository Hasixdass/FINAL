<HTML>
	<HEAD> <TITLE> Modification </TITLE> </HEAD>
	<BODY>
		<?php
		  $id=$_POST['i'];
		  $anarana=$_POST['nom'];
		  $fanampiny=$_POST['prenom'];
		  $cin=$_POST['laharana'];
		  echo ' <FORM method="POST" action="update.php">
					<input type="hidden" name="id" value="'.$id.'">
					
					<label>Anarana : </label>
					<input type="text" name="nom" value="'.$anarana.'"><br><br>
					
					<label>Fanampin`anarana  : </label>
					<input type="text" name="prenom" value="'.$fanampiny.'"><br><br>
					
					<label>CIN : </label>
					<input type="text" name="laharana" value="'.$cin.'"><br><br>
					<input type="submit" value="MODIFIER">
				 </FORM>';
		?>
		<hr>
		
		<h2> Liens utiles </h2>
		<ul>
			<li><a href="tableau.php">Liste des inscrits</a></li>
			<li><a href="#">Plan du site</a></li>
			<li><a href="#">Nous contacter</a></li>
		</ul>
	</BODY>
</HTML>