<?php 

include 'functions.php';
deleteBook($_GET['idsupp']);
header('location: sub_page/dashboard.php');


?>
