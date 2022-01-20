<?php 

include 'functions.php';

if(isset($_GET['idsupp'])){
deleteBook($_GET['idsupp']);

header('location: ../sub_page/dashboard.php');

}

if(isset($_GET['idCat'])){
deleteCategorie($_GET['idCat']);
header('location: ../sub_page/manage_categories.php');



}

?>
