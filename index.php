<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWS-SITE</title>
    <link rel="stylesheet" href="./components/style.css">
</head>
<body>
<div class="header">
    <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/ff/BBC_News.svg/1200px-BBC_News.svg.png" alt="logo">
</div>
<div class="title"><h1>NEWS-SITE</h1>
<button><a href="./admin/login.php">Admin</a></button></div>
<div class="container"><?php  include_once("../components/newss.php");?> </div>
<div class="footer">
 &copy;<?php echo date('y/m/d')?>
</div>
</body>
</html>



