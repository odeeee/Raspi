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