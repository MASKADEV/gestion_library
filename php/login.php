<?php 
session_start();
include 'functions.php';

 
if(isset($_GET['logout'])){
    session_unset();
  
    session_destroy();
        header('location: ../index.php');


}else{
    $username=$_POST['user_name'];

    $pass=$_POST['password'];
    
    login($username,$pass);   }


?>