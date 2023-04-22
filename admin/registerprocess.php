<?php
$conn=new mysqli('localhost','root','','news');
if(!$conn){
    die ("connection failed");
}
$uname=$_POST['username'];
$pword=$_POST['password'];
$hashedPass= md5($pword);
$sql = "INSERT INTO user (id,username,password)VALUES(null,'$uname','$hashedPass')";
$res= $conn->query($sql);
if($res === TRUE){
    echo "data inserted";
    header('location:login.php');
}
$conn->close();
?>