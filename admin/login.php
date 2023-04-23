<?php 
session_start();
if (isset($_SESSION['logedin'])==1){
    header('location:hidden.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link href="../admin/form.css" rel="stylesheet">
</head>
<body>
<div class="rp">
  <img src="https://live.staticflickr.com/8505/8490246472_e336c463c5.jpg" height="300px" width="250px">
</div>
   <form method="post" action="./loginprocess.php">
   <div class="p">
   <h1>Login Form</h1>
   </div>
   <h2>&#9786;sign in</h2>
   <div class="list">
    <label ><b>USERNAME:</b> </label>
    <input type="text"  name="username" placeholder="Enter username">
   </div>
   <div class="list">
    <label><b>PASSWORD: </b></label>
<input type="password"  name="password" placeholder="Enter the password">
   </div>
 <div class="button">
<button type="submit">Login</button>
</div>
<p>OR</p>
<div class="reg"><a href="./register.php"><b>Register</b></a></div>
   </form> 
</body>
</html>