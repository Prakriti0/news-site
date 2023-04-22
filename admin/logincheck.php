<?php 
session_start();
if (isset($_SESSION['logedin'])!=1){
    header('location:login.php');
}
?>