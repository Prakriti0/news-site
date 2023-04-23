<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin/hidden.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <div class="h1">
    <h1>Hello Users!</h1>
    </div>
<?php
include_once("../admin/logincheck.php"); 
?>
<div class="h">
<button><a href="../update.php/addform.php" ><img src="https://cdn-icons-png.flaticon.com/512/2891/2891421.png" height="250px" width="200px"></a>
<p><b>ADD NEWS</b></p>
</button> 
<button><a href="../view/viewall.php"><img src="https://static.thenounproject.com/png/1636473-200.png" height="250px" width="200px"></a>
<p><b>View all details</b></p>
</button>

<button><a href="logout.php"><img src="https://static.thenounproject.com/png/4830014-200.png" height="250px" width="200px"></a>
<p><b>LogOut</b></p>
</button>
</div>
</body>
</html>

