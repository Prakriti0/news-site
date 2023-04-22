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
   <div class="red">
   <h1>NEWS</h1>
   </div> <br>
   <form method="POST" action="./registerprocess.php">
   <h2>&#9786;sign in</h2> <br>
   <div class="list">
    <label ><b>USERNAME:</b> </label>
    <input type="text"  name="username" placeholder="Enter username">
   </div>
   <div class="list">
    <label><b>PASSWORD: </b></label>
<input type="password"  name="password" placeholder="Enter the password">
   </div>
   <div class="button">
<div class="log"><button type="submit">LogIn</button></div>
   </div>
   </form> 
</body>
</html>