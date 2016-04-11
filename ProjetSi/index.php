<html>
	<head>
		<title>Authentification</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body background="resources/back.jpg">
  
		<h1 align="center" class="titre"><i>Login System</i></h1>
		<div align="center" class="container">
		<form method="post" action="traitement.php">
			<table border="0">
				<tr>
					<td>Login :</td>
					<td><input type="text" name="login" /></td>
				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="password" name="pass" /></td>
				</tr>
				<tr>
				<td colspan="2" align="right">
					<input type="submit" value="Se connecter"/><input type="reset" value="Reset"/>
					</td>
				</tr>
			</table>
		</form>
		</div>
	</body>
</html>