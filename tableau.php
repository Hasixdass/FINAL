<HTML>
	<HEAD> <TITLE> TABLEAU </TITLE> </HEAD>
	</BODY>
		<?php
		
		 $login="root";
		 $server="localhost";
		 $pass="";
		 $bdname="ceni";
		 $con=mysqli_connect($server, $login, $pass, $bdname);
		 $sql="SELECT * FROM lisi_pifidianana";
		 
		 // connexion à la base de données
		 if(!$con)
		 {
			die("La connexion à la base de données a échoué:" .mysqli_connect_error());
		 }
		 else
		 {
			echo "<h2>Ny lisitrin'ny mpifidy rehetra: </h2> <BR>";
			$sql="SELECT * FROM lisi_pifidianana order by Nom";
			$res=mysqli_query($con, $sql);
			
			// Affichage des données
			echo '<TABLE border=2 >';
				echo"<TR>";
					echo "<TH> ID </TH>";
					echo "<TH> Nom </TH>";
					echo "<TH> Prenom </TH>";
					echo "<TH> CIN </TH>";
					echo "<TH> Modification </TH>";
					echo "<TH> suppression </TH>";
				echo "</TR>";
				while($ligne=mysqli_fetch_assoc($res))
				{
					echo "<TR>";
						echo "<TD>" .$ligne["ID"]."</TD>";
						echo "<TD>" .$ligne["Nom"]."</TD>";
						echo "<TD>" .$ligne["Prenom"]."</TD>";
						echo "<TD>" .$ligne["CIN"]."</TD>";
						echo '<TD>
								<FORM method="POST" action="mod.php">
									<input type="hidden" name="i" value= "'.$ligne["ID"].'">
									<input type="hidden" name="nom" value= "'.$ligne["Nom"].'">
									<input type="hidden" name="prenom" value= "'.$ligne["Prenom"].'">
									<input type="hidden" name="laharana" value= "'.$ligne["CIN"].'">
									<button type="submit"> Modifier </button>
								</FORM>
							  </TD>';
						echo '<TD>
								<FORM method="POST" action="delete.php">
									<button type="submit" name="id" value="'.$ligne["ID"].'">Supprimer</button>
								</FORM>
							  </TD>';
					echo "</TR>";
				}
			echo "</TABLE>";
			
		 }
		 // fermer la connexion
		 mysqli_close($con);
		?>
	</BODY>
</HTML>	