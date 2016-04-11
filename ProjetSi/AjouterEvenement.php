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
<script type="text/javascript">
	function verifier(){
	var error=0;
	if(document.getElementById("info").value==""){
		document.getElementById("informationDiv").innerHTML="<h3 style=\"color:red;border:3px double red;\">Les champs des informations sont obligatoire</h3>";
		document.getElementById("informationDiv").style.visibility="visible";
		error++;
	}
	
	else{
		document.getElementById("informationDiv").innerHTML="";
		document.getElementById("informationDiv").style.visibility="hidden";
	}

	if(document.getElementById("code").value==""){
		document.getElementById("codeDiv").innerHTML="<h3 style=\"color:red;border:3px double red;\">Le code de l'évenement est obligatoire</h3>";
		document.getElementById("codeDiv").style.visibility="visible";
		error++;
	}
	else{
		document.getElementById("codeDiv").innerHTML="";
		document.getElementById("codeDiv").style.visibility="hidden";
	}

	if(error==0){
		document.getElementById("formEvent").submit();
	}
	}
</script>
</head>
<body background="resources/back.jpg">
<div align="left">
		<span align="left" ><a href="ProfesseurIndex.php"><img src="resources/homeicon.png" width="5%"></a></span>
</div>
<br><br><br><br><br><br>
	<h1 align="center" style="border-bottom: 3px double gray;"><img src="resources/newEventBarre.png"></h1>
		<div class="container">
		<form action="AddEvent.php" id="formEvent">
		<table border="0" width="70%">
			<tr>
				<td>Code évenement <span style="color: red;">(*)</span> :</td>
				<?php $index=$db->LastIndex("evenement");?>
				<td><input type="text" size="5" id="code"  name="code" value= <?php echo "\"" . $index  ." \" " ?>/></td>
			</tr>
			<tr>
				<td></td>
				<td width="70%"><div id="codeDiv" style="visibiliy:"hidden"></div></td>
			</tr>
			<tr>
				<td>Date <span style="color: red;">(*)</span> :</td>
				<td><input id="dateD" type="date" size="20" name="date" min=<?php echo date("Y-m-d"); ?> max=<?php echo date("Y-m-d"); ?> /></td>
			</tr>
			<tr>
				<td></td>
				<td width="70%"><div id="DateDDiv" style="visibiliy:"hidden"></div></td>
			</tr>
			<tr>
				<td>Niveau (Select 0 for All level's event)<span style="color: red;">(*)</span> :</td>
				<td>
					<select size="1" name="niveau">
						<option>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Information <span style="color: red;">(*)</span>:</td>
				<td><textarea id="info" cols="30" rows="10" name="info"></textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td width="70%"><div id="informationDiv" style="visibiliy:"hidden"></div></td>
			</tr>
			<tr>
				<td>La date d'expiration <span style="color: red;">(*)</span> :</td>
				<td><input type="date" size="20" name="dateExp" min=<?php echo date("Y-m-d");?> /></td>
			</tr>
		</table>
	</form>
	<div align="right">
		<input type="button" value="Enregistrer" onclick="verifier();">
	</div>
	</div>
</body>
</html>