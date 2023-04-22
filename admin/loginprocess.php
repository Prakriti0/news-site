<?php 
$conn=new mysqli('localhost','root','','news');
if(!$conn){
    die ("connection failed");
}
$uname=$_POST['username'];
$pword=$_POST['password'];
$hashedPass= md5($pword);

echo $hashedPass;
$sql = "SELECT * FROM user WHERE username='$uname' && `password` ='$hashedPass' LIMIT 1;";
echo $sql;
$res= $conn->query($sql);
if($res->num_rows>0){
   session_start();
   $_SESSION["logedin"]= true;
   header('location:hidden.php');
}
else {
    echo "user doesnot exists";
}$conn->close();
?>