<HTML>
	<HEAD> <TITLE>Recherche</TITLE> </HEAD>
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
		 $sql="SELECT * FROM lisi_pifidianana WHERE Nom='$anarana' AND Prenom='$fanampiny' AND CIN='$cin'";
		 $res=mysqli_query($con, $sql);
		 echo mysqli_error($con);
		 if(mysqli_num_rows($res)>0)
			{
				echo '<H3> Valin’ny fitadiavana: </H3><BR>';
				echo "Misoratra ao anaty lisitry ny mpifidy ianao";
			}
			else
			{
				echo '<H3> Valin’ny fitadiavana: </H3><BR>';
				echo "Tsy misoratra ao anaty lisitry ny mpifidy io « Anarana » sy « Kara-panondro » notadiavinao io.<BR> Tsindrio<a href='inscription.html'> eto</a> raha hisoratra anarana";
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
		 