<?php include 'lib/Database.php';?>
	<?php 
			$code=$_GET["code"];
			$date=$_GET["date"];
			$information=$_GET["info"];
			$dateExp=$_GET["dateExp"];
			$niveau=$_GET["niveau"];
			
	?>
		
	<?php 
			$db=new Database("localhost","etableau","root","");
			$row=Array($code,$information,$dateExp,$date,$niveau);
			$res=$db->insert("evenement",$row);
			echo "<h2>Evenement ajout� avec succ�s</h2>";
			echo "<a href=\"ProfesseurIndex.php\">$niveau Revenir � la page d'acceuil</a>";
	?>