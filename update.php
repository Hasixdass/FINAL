<HTML>
	<HEAD> <TITLE> UPDATE </TITLE> </HEAD>
	</BODY>
		<?php
		 $i=$_POST['id'];
		 $anarana=$_POST['nom'];
		 $fanampiny=$_POST['prenom'];
		 $cin=$_POST['laharana'];
		 $con=mysqli_connect('localhost','root','','ceni');
		 
		 // Vérification de la connexion
		 if(!$con)
		 {
			die("La connexion à la base de données a échoué:" .mysqli_connect_error());
		 }
		 else
		 {
			echo "<H1> Tontosa ny fanovana </H1> <BR>";
			$sql="UPDATE lisi_pifidianana SET Nom='$anarana', Prenom='$fanampiny', CIN='$cin' where ID='$i'";
			mysqli_query($con, $sql);
		 }
		 mysqli_close($con);
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