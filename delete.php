<HTML>
	<HEAD> <TITLE> SUPPRESSION </TITLE> </HEAD>
	</BODY>
		<H1> Tontosa ny famafana lisitra ny mpifidy  </H1>
		<?php
		 $i=$_POST['id'];
		 $con=mysqli_connect('localhost','root','','ceni');
		 $sql="DELETE FROM lisi_pifidianana WHERE ID='$i'";
		 mysqli_query($con, $sql);
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
