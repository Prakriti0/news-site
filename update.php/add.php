<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="news";
    $conn = new mysqli($servername,$username,$password,$database);
    if ($conn->connect_error){
        die("connection failed");
    }
    $title = $_GET['title'];
    $newsurl = $_GET['newsurl'];
    $desc= $_GET['desc'];
    $author= $_GET['author'];
    $rating= $_GET['rating'];
    $sql="INSERT INTO header(id,title,newsurl,description,author,rating)VALUES(null,'$title','$newsurl','$desc','$author',$rating)";
    $result = $conn->query($sql);
    if($result === TRUE){
        header("Location:./../admin/hidden.php");
    }
    else{
        echo ("could not insert");
    }
    ?>
</body>
</html>
</body>
</html>
