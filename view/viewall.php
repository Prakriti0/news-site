<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./view.css">
</head>
<body>
<div class="container">
    <h1>HISTORY</h1>
    <table>
 <tr>
    <th>id</th>
    <th>title</th>
    <th>newsurl</th>
    <th>description</th>
    <th>author</th>
    <th>rating</th>
    <th>Action</th>
</tr>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="news";
    $conn=new mysqli($servername,$username,$password,$database);
    $sql = "SELECT * FROM header";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while( $row= $result->fetch_assoc()){
             ?>
            
        <tr>
              <td id="b">   <?php echo$row['id'];?></td>
                <td>   <?php echo$row['title'];?></td>
                <td id="a">   <?php echo$row['newsurl'];?></td>
                <td> <?php echo$row['description'];?></td>
                <td id="c"> <?php echo$row['author'];?></td>
                <td>  <?php echo$row['rating'];?></td>
                <td id="d">
                <a href="./editform.php?id=<?php echo $row['id'];?>&title=<?php echo $row['title'];?>&newsurl=<?php echo $row['newsurl'];?>&description=<?php echo $row['description'];?>&author=<?php echo $row['author'];?>&rating=<?php echo $row['rating'];?>">&#9998;</a>    
                <a href="./delete.php?id=<?php echo $row['id'];?>"><span class="material-symbols-outlined">delete</span></a>
                </td>
             </tr> 
            </div>
        </div>
        <?php       
        }}
        $conn->close();
        ?>
        </table>
    </div>
    </div>
</body>
</html>