<?php

include 'functions.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['product_thumb'])) {
  // print_r($_FILES['product_thumb']);
  if (bookExist($_POST['isbn'])) {
    $img_name = $_FILES['product_thumb']['name'];
    
    $tmp_name = $_FILES['product_thumb']['tmp_name'];
     $folder = "../assets/".$img_name;
        // Now let's move the uploaded image into the folder: image
  move_uploaded_file($tmp_name, $folder) ;
  

    updateBook($_POST['isbn'], $_POST['bookname'], $_POST['author'], $_POST['description'], $_POST['quantity'], $_POST['price'], $_POST['categorie'], $folder);
  } 
  else {
    $img_name = $_FILES['product_thumb']['name'];
    
    $tmp_name = $_FILES['product_thumb']['tmp_name'];
     $folder = "../assets/".$img_name;
  
          
        // Now let's move the uploaded image into the folder: image
  move_uploaded_file($tmp_name, $folder) ;

   
  addbook($_POST['isbn'], $_POST['bookname'], $_POST['author'], $_POST['description'], $_POST['quantity'], $_POST['price'], $_POST['categorie'], $folder);
  }
}
