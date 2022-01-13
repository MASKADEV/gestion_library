<?php 

include 'functions.php';


if(bookExist($_GET['isbn'])){

    updateBook($_GET['isbn'],$_GET['bookname'],$_GET['author'],$_GET['description'],$_GET['quantity'],$_GET['price'],$_GET['categorie']);

}else{

    addbook($_GET['isbn'],$_GET['bookname'],$_GET['author'],$_GET['description'],$_GET['quantity'],$_GET['price'],$_GET['categorie']);

}



?>