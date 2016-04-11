<?php 
	$url="mysql:host=localhost;dbname=etableau"; //Chaine de connexion
		$user="root";
		$password="";
		
		$db=new PDO($url, $user, $password);
		$rs=$db->query("SELECT * FROM evenement");
		$n=$rs->columnCount();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Table Produit</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body background="resources/back.jpg">
<div align="left">
		<span align="left" ><a href="ProfesseurIndex.php"><img src="resources/homeicon.png" width="5%"></a></span>
</div>
<br><br><br><br><br><br>
	<h1 align="center" style="border-bottom: 3px double gray;"><img src="resources/EventsListBarre.png"></h1>
	
	
<br><br><br><br><br><br>
	<table cellpadding="0" cellspacing="0" border="0" id="table" class="sortable">
		<thead>
			<tr>
				<th><h2>Code</h2></th>
				<th><h2>Information</h2></th>
				<th><h2>Date D'expiration</h2></th>
				<th><h2>Date d'annonce</h2></th>
				<th><h2>Niveau</h2></th>
				<th><h2>Select</h2></th>
			</tr>
		</thead>
		<tbody>
		<?php 
		foreach ($rs as $row){
		?>
		 <tr> 
			<?php
			for($i=0;$i<$n;$i++){
			?>
				<td><?php echo  $row[$i] ?></td>
			<?php
			}
			echo "<td><input type=\"checkbox\" id=\"".  $row[0] . "\"/> </td>";
			?>
			 </tr> 
		<?php 
		
		}
		?>
		</tbody>
		 
  </table>

	<div id="controls">
		<div id="perpage">
			<select onchange="sorter.size(this.value)">
			<option value="5">5</option>
				<option value="10" selected="selected">10</option>
				<option value="20">20</option>
				 
			</select>
			<span style="color : white">Entries par Page</span>
		</div>
		<div id="navigation">
			
			<img src="images/first.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" />
			<img src="images/previous.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" />
			<img src="images/next.gif" width="16" height="16" alt="First Page" onclick="sorter.move(1)" />
			<img src="images/last.gif" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" />
		</div>
		<div id="text" style="color : white"> Page <span id="currentpage" style="color : white" ></span> sur <span id="pagelimit" style="color : white"></span><input type="button" value="Cancel Event(s)"  onclick="alert();"/></div>
	</div>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
  var sorter = new TINY.table.sorter("sorter");
	sorter.head = "head";
	sorter.asc = "asc";
	sorter.desc = "desc";
	sorter.even = "evenrow";
	sorter.odd = "oddrow";
	sorter.evensel = "evenselected";
	sorter.oddsel = "oddselected";
	sorter.paginate = true;
	sorter.currentid = "currentpage";
	sorter.limitid = "pagelimit";
	sorter.init("table",1);
  </script>
</body>
</html>