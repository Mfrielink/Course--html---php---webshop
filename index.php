<!DOCTYPE html>
<html>
<head>
<title>Webshop</title>
<link rel="stylesheet" type="text/css" href="CSS/MenuStyle.css">
<link rel="stylesheet" type="text/css" href="CSS/Stylesheet.css">
<body>

<div id="header">
    <?php require ("header.php"); ?>
</div>

<div id="menucontainer">
    <?php require ("menu.php"); ?>
</div>

<div id="centerContent">
	
	<div class="title_welcome">Welcome to the webshop</div>
        <div class="welcome_box">
            <p class="welcome">
                <?php
                $mysql = mysql_connect("localhost","root","") or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");
                mysql_select_db("testdb",$mysql) or die("Fout: Het openen van de database is mislukt!");
                $resultaat = mysql_query("SELECT Brand, Type, Category, Screensize, Price, Stock FROM laptop",$mysql) or die("De query op de database is mislukt!");
                mysql_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");

                while(list($Brand, $Type, $Category, $Screensize, $Price, $Stock) = mysql_fetch_row($resultaat))
                  {
                    print(" $Brand $Type $Category $Screensize $Price $Stock<br />");
                  }
                  ?>
			</p> 
        </div>

        <div class="ad"><b>On sale product here</b></div>

        <div class="ad"><b>Popular product here</b></div>

</div>

<div id="footer">
    <?php require ("footer.php"); ?>
</div>

</body>
</head>
</html>