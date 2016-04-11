<?php 
include 'lib/Database.php';
?>
<?php
	$db = new Database("localhost","etableau","root","");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" type="text/css" href="css/style.css" >
<title>Insert title here</title>
</head>
<body background="resources/back.jpg">
	<h1 align="center" style="margin-bottom: 150px;color: #ffffff;" ><br><br><br><br><img   src="resources/menuPbanner.png"> </h1>
	<div align="center">
		<span align="center" ><a href="AjouterEvenement.php"><img src="resources/add.png" width="10%"></a></span>
		<span align="center" ><a href="ListeDesEvenementsComputer.php"><img src="resources/cancel.png" width="10%"></a></span>
		<span align="center" ><a href="AnnulerEvenements.php"><img src="resources/list.png" width="10%"></a></span>
	</div>
</body>
</html>