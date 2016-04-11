<?php 
include 'lib/Database.php';
include 'lib/View.php';
?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<link rel="stylesheet" type="text/css" href="css/style.css" >
</head>
<body background="resources/back.jpg">
<div align="left">
		<span align="left" ><a href="ProfesseurIndex.php"><img src="resources/homeicon.png" width="5%"></a></span>
</div>
<br><br><br><br><br><br>
	<h1 align="center" style="border-bottom: 3px double gray;"><img src="resources/EventsListBarre.png"></h1>
	
	
	<?php
	$db = new Database("localhost","etableau","root","");
	$rs=$db->selectAll("evenement");
	$view=new View();
	$view->table($rs);
	?>


</body>
</html>