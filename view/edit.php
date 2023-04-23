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
    $id=$_GET['id'];
    $title = $_GET['title'];
    $newsurl = $_GET['newsurl'];
    $desc= $_GET['description'];
    $author= $_GET['author'];
    $rating= $_GET['rating'];
    $sql="UPDATE header SET title='$title',newsurl='$newsurl',description='$desc',author='$author',rating=$rating where id=$id";
    $result = $conn->query($sql);
    if($result === TRUE){
        header("Location:./../index.php");
    }
    else{
        echo ("could not insert");
    }
    ?>
</body>
</html>