<?php

$db_host = "localhost"; 
$db_username = "root";
$db_pass = "orava1337";
$db_name = "TESTI_DATABASE";

@mysql_connect("$db_host" , "$db_username" , "$db_pass") or die ("Could not connect to MySQL");
@mysql_select_db("$db_name") or die ("No database");

echo "Desibelit: ";


$query = "SELECT Arvo FROM DATA ORDER BY Aika DESC LIMIT 1";
$results = mysql_query($query);


//echo $row['Arvo'];

while ($row = mysql_fetch_array($results)) {
	
	echo $row['Arvo'];
	$vert = (int) $row['Arvo'];
	echo "<br>";

	/*if(50 < $vert && $vert < 75){
	echo "##";
	}else if($vert > 75){
	echo "###########";
	}*/

	if($vert < 10){
	echo "██_________";
	}else if(9 < $vert && $vert < 20){
	echo "███________";
	}else if(19 < $vert && $vert < 30){
	echo "████_______";
	}else if(29 < $vert && $vert < 40){
	echo "█████______";
	}else if(39 < $vert && $vert < 50){
	echo "██████_____";
	}else if(49 < $vert && $vert < 60){
	echo "███████____";
	}else if(59 < $vert && $vert < 70){
	echo "████████___";
	}else if(69 < $vert && $vert < 80){
	echo "█████████__";
	}else if(79 < $vert && $vert < 90){
	echo "██████████_";
	}else if(89 < $vert && $vert < 150){
	echo "███████████";
	}
    	

}
/*
while ($row = mysql_fetch_array($results)) {
	echo '<tr>';
	foreach($row as $field) {
		echo '<td>' . htmlspwcialchars($field) . '</td>';
    	}
	echo '</tr>';
}
*/

?>
<html>
 <head>
  <meta http-equiv="refresh" content="1">
 </head>
</html>