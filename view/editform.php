<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../update.php/add.css">
    <link rel="stylesheet" href="./view.css">
    <title>Document</title>
</head>
<body>
<div class="g">
    <form action="edit.php" method="GET">
 <h1>Edit News</h1>
        <input type="number" name="id" placeholder="enter your id" value="<?php echo $_GET['id'];?>" hidden>
    <br>
        <label for="title"><b>TITLE:</b></label>
        <input type="text" name="title" placeholder= "enter title" value="<?php echo $_GET['title'];?>" required>
    <br>
    <label for="newsurl"><b>NEWSURL</b></label>
        <input type="url" name="newsurl" placeholder= "enter url" value="<?php echo $_GET['newsurl'];?>" required>
    <br>
        <label for="desc"><b>DESCRIPTION:</b></label>
        <input name="description" placeholder="enter description"  value="<?php echo $_GET['description'];?>" required> 
    <br>
        <label for="author"><b>AUTHOR:</b></label>
        <input type="text" name="author" placeholder="enter author"value="<?php echo $_GET['author'];?>" required>
    <br>
        <label for="rating"><b>RATING:</b></label>
        <input type="number" name="rating" placeholder="enter rating" value="<?php echo $_GET['rating'];?>" required>
    <br>
    <div class="b"><button type="submit">EDIT</button></div>
    </form>
    </div>
</body>
</html>
