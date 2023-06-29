<HTML>
	<HEAD> <TITLE>INSERTION</TITLE> </HEAD>
	<BODY>
		<?php
		 $anarana=$_POST['nom'];
		 $fanampiny=$_POST['prenom'];
		 $cin=$_POST['laharana'];
		 $login="root";
		 $server="localhost";
		 $pass="";
		 $bdname="ceni";
		 $con=mysqli_connect($server, $login, $pass, $bdname);
		 $sql="INSERT INTO lisi_pifidianana (Nom, Prenom, CIN) VALUE ('$anarana','$fanampiny','$cin')";
		 mysqli_query($con, $sql);
		 echo "Tafiditra bao anaty lisi_pifidianana ianao";
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