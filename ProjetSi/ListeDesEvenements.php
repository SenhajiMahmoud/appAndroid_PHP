<?php



$con = $con = mysql_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("etableau", $con);


$exec = mysql_query("delete  FROM evenement where datediff(NOW(),dateExp)>0");

$niv=$_GET["nv"];
if($niv==0){
	 $result =mysql_query("SELECT * FROM evenement");
}
else{
	$result = mysql_query("SELECT * FROM evenement where niveau = " . $_GET["nv"]);
}



if(mysql_num_rows($result)>0){
	
	while($row = mysql_fetch_assoc($result))
	  {
		$output[]=$row;
	  }
	print(json_encode($output));
}



mysql_close($con);


?>