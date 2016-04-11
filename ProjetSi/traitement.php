<?php include 'lib/Database.php';?>
<?php
	$login=$_POST['login'];
	$pass=$_POST['pass'];
	$db = new Database("localhost","etableau","root","");
	$rs=$db->select2("users","login","pass",$login,$pass);	
	if($rs){
		echo "<body background=\"resources/back.jpg\">";
		 
		echo "<h1 align=\"center\" style=\"color: #ffffff;> Vous etes connecté !! </h1>";
		if(strstr($rs[0],"A")){
			$rsNomAdmin=$db->select("administration","code",$rs[0]);	
			echo "<h1 align=\"center\" style=\"color: #ffffff;;border-bottom:1px solid gray;\">Bienvenue " . $rsNomAdmin[1] . " " . $rsNomAdmin[2] . "</h1>";
			header("Refresh: 4 ; URL=ProfesseurIndex.php");
		}
		else if(strstr($rs[0],"P")) {
			$rsNomProf=$db->select("professeur","code",$rs[0]);	
			echo "<h1 align=\"center\" style=\"color: #ffffff;;border-bottom:1px solid gray;\">Bienvenue " . $rsNomProf[1] . " " . $rsNomProf[2];
			header("Refresh: 4 ; URL=ProfesseurIndex.php");
		}	
	}
	else{
		echo "<h1> Echec de connexion : login ou mot de passe incorrect !! </h1>";
		echo "<a href='index.php'>Essayer encore</a>";
	}

?>

<html>
	<head>
		<title>Authentification</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body background="resources/back.jpg">
 
	</body>
</html>