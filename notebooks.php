<!DOCTYPE html>
<html>
<head>
<title>Webshop</title>
</head>
<link rel="stylesheet" type="text/css" href="CSS/MenuStyle.css">
<link rel="stylesheet" type="text/css" href="CSS/Stylesheet.css">
<body>

<div id="header">
    
    <?php require ("header.php"); ?>

</div>

<div id="menucontainer">
    <ul id="hmenu">
        <li class="parent_menu"><a href="index.php">Home</a></li>
        <li class="parent_menu"><a href="#">Laptops</a>
            <ul>
                <li class="child_menu"><a href="notebooks.php">Notebooks</a></li>
                <li class="child_menu"><a href="#">Ultrabooks</a></li>
                <li class="child_menu"><a href="#">2 in 1 - devices</a></li>
                <li class="child_menu"><a href="#">Macbooks</a></li>
                <li class="child_menu"><a href="#">Chromebooks</a></li>                
            </ul>
        </li>
        <li class="parent_menu"><a href="#">Headphones</a>
            <ul>
                <li class="child_menu"><a href="#">On-ear</a></li>
                <li class="child_menu"><a href="#">Over-ear</a></li>
                <li class="child_menu"><a href="#">In-ear</a></li>
            </ul>
        </li>
        <li class="parent_menu"><a href="#">Accessoires</a></li>
        <li class="parent_menu"><a href="#">Contact Us</a></li>
    </ul>
</div>

<div id="centerContent">
	
	<div class="title_welcome">Notebooks</div>
        <div class="welcome_box">
            <p class="welcome">
                On this part of website, you'll find different types of notebooks from several brands.
			</p> 
        </div>


        <div class="categories">
            List of categories
        </div>

        <div class="items">
            List of items
        </div>


</div>

<div id="footer">
	<a href="index.html">Home</a> 
	<a href="disclaimer.html">Disclaimer</a> 
	<a href="copyright.html">Copyright</a>
	<a href="sitemap.html">Sitemap</a>
</div>

</body>
</html>