<?php
class View{
	public function table($rs){
		echo "<table align=\"center\" border='1' width='100%' cellspacing='0' cellpadding='10'>";
		$n=$rs->columnCount();
		echo "<tr>";
		for ($i=0;$i<$n;$i++){
			$m=$rs->getColumnMeta($i);
			echo "<td align=\"center\" style='background-color:WHITE;font-weight:bold;'>" 
			. $m["name"] . "</td>";
		}
		echo "</tr>";
		foreach ($rs as $row){
			echo "<tr>"; 
				for($i=0;$i<$n;$i++){
					echo "<td align=\"center\" class=\"container\" >" . $row[$i] . "</td>";
				}
			echo "</tr>";
			}
		echo "</table>";
	}
	public function simpleView($rs){
		$n=$rs->columnCount();
		foreach ($rs as $row){
				for($i=0;$i<$n;$i++){
					 echo $row[$i] . " ";
					
				}
				 echo "<br>";
			}
	}
	
	public static function printRow($titles, $row){
		echo "<table border='1'>";
		for($i=0;$i<count($titles);$i++){
			echo "<tr><td>" . $titles[$i] . 
				": </td><td>" . $row[$i] . "</td></tr>";
		}
		echo "</table>";
	}
	
	
	public function Testview(){
		
		$con = $con = mysql_connect("localhost","root","");
		
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		mysql_select_db("etableau", $con);
		
		$result = mysql_query("SELECT * FROM administration");
		
		while($row = mysql_fetch_assoc($result))
		  {
			$output[]=$row;
		  }
		
		print(json_encode($output));
		
		mysql_close($con);
				
	}
	
}