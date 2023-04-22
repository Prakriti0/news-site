<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  
<?php
   include ("../components/connection.php");
     $sql= "SELECT * FROM header ";
     $result= $conn->query($sql);
     if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            ?>
            <div class="box">
            <div class="photo">
            <div class="title"><h2><?php echo $row['title']; ?></h2></div>
            <div class="img">
            <img src="<?php echo $row["newsurl"];?>" alt="image">
            </div>
            <div class="desc"><?php echo $row['description']; ?></div>
            <div class="author">
                <?php echo $row['author'];?></div> <br>
            <div class="rating"><?php echo $row['rating']; ?></div>
            </div>
            </div>
            <?php
        }
     }
     $conn->close();
     ?>
</body>
</html>
