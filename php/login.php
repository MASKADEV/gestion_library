<?php 

include 'functions.php';

$username=$_POST['user_name'];

$pass=$_POST['password'];

login($username,$pass);    

?>