<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
<div class="c">
<?php
   include ("./components/connection.php");
     $sql= "SELECT * FROM header ";
     $result= $conn->query($sql);
     if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            ?>
            <div class="box">
            <div class="innerbox">
            <div class="title" ><h2><marquee><?php echo $row['title']; ?></marquee></h2></div> <br>
            <div class="img">
            <img src="<?php echo $row["newsurl"];?>" alt="image">
            </div> <br>
            <div class="desc"><?php echo $row['description']; ?></div>
            <div class="author">
                <?php echo $row['author'];?></div> <br>
            <div class="rating"><span class="material-symbols-outlined">star</span><?php echo $row['rating']; ?></div>
            </div>
            </div>
            <?php
        }
     }
     $conn->close();
     ?>
     </div>
</body>
</html>
