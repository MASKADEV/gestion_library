<?php

include 'functions.php';
if (isset($_GET['isbn'])) {
  if (empty($_POST['isbn'])) {
    header('location: ../../sub_page/dashboard.php');
  }

  if (bookExist($_GET['isbn'])) {

    updateBook($_GET['isbn'], $_GET['bookname'], $_GET['author'], $_GET['description'], $_GET['quantity'], $_GET['price'], $_GET['categorie'], $_GET['product_thumb']);
  } else {

    addbook($_GET['isbn'], $_GET['bookname'], $_GET['author'], $_GET['description'], $_GET['quantity'], $_GET['price'], $_GET['categorie'], $_GET['product_thumb']);
  }
}
//add Edit Categorie

elseif (!empty($_GET['id_categorie'])) {

  // echo"ok";

  updateCategorie($_GET['id_categorie'], $_GET['name_categorie']);
} else {
  // echo"notok";
  addCategorie($_GET['name_categorie']);
}
