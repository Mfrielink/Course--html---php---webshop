<?php
$mysql = mysql_connect("localhost","root","") or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");
mysql_select_db("testdb",$mysql) or die("Fout: Het openen van de database is mislukt!");
$resultaat = mysql_query("SELECT * FROM laptop",$mysql) or die("De query op de database is mislukt!");
mysql_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");

echo $resultaat;
?>