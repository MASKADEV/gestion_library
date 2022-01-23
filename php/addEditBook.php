<?php

include 'functions.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['product_thumb'])) {
  // print_r($_FILES['product_thumb']);
  if (bookExist($_POST['isbn'])) {
    updateBook($_POST['isbn'], $_POST['bookname'], $_POST['author'], $_POST['description'], $_POST['quantity'], $_POST['price'], $_POST['categorie'], $_POST['product_thumb']);
  } else {
    $img_name = $_FILES['product_thumb']['name'];
    $img_size = $_FILES['product_thumb']['size'];
    $tmp_name = $_FILES['product_thumb']['tmp_name'];
    $error = $_FILES['product_thumb']['error'];

    $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;

    addbook($_POST['isbn'], $_POST['bookname'], $_POST['author'], $_POST['description'], $_POST['quantity'], $_POST['price'], $_POST['categorie'], $img_name);
  }
}
