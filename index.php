<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWS-SITE</title>
    <link rel="stylesheet" href="./components/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
<div class="header">
    <nav>
    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/ff/BBC_News.svg/1200px-BBC_News.svg.png" alt="logo">
    <li>&#9786;Sign in</li>
    <li>weather</li>
    <li>iplayer</li>
    <li>radio</li>
    <li>Tv</li>
    <li><span class="material-symbols-outlined">more_vert</span>more</li>
    <li><span class="material-symbols-outlined">search</span>Search</li>
</nav>
</div>
<div class="title"><h1>NEWS HEADLINES TODAY</h1>
<button><a href="./admin/login.php">Admin</a></button></div>
<?php include("./components/connection.php")?>
<div class="container"><?php include_once("./components/newss.php");?> </div>
<div class="footer">
 &copy;<?php echo date('y/m/d')?>
</div> 
</body>
</html>



