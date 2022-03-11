<?php

include 'functions.php';

//add Edit Categorie
if (!empty($_GET['id_categorie'])) {

    updateCategorie($_GET['id_categorie'], $_GET['name_categorie']);
} else {

    addCategorie($_GET['name_categorie']);
}
