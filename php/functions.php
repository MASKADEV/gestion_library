<?php
session_start();
//connction 
function connection()
{

    return mysqli_connect("localhost", "root", "", "gestionstockbiblio");
}

//login
function login($username, $pass)
{
    $sql = ("select * from admin WHERE username='$username' and Password='$pass'");
    $res = mysqli_query(connection(), $sql);
    if (mysqli_num_rows($res) == 1) {
        $_SESSION["is_logedin"] = 1;
        header('location: ../sub_page/dashboard.php');
    } else {
        echo "<script> alert('username or password incorrect')</script>";
        header('location: ../index.php?error=invalideuser');
    }
}

//insert bookData
function addBook($isbn, $title, $author, $description,  $quantite, $price,  $id_categorie, $product_thumb)
{
    $sql = "insert into book values('$isbn', '$title', '$author','$description',  '$quantite', '$price','$product_thumb', '$id_categorie') ";

    if (mysqli_query(connection(), $sql)) {
        header('location: ../sub_page/dashboard.php');
    } else {
        header('location: ../sub_page/dashboard.php');
    }
}

// delete Book
function deleteBook($isbn)
{
    $sql = "delete from book where isbn='$isbn'";
    $res = mysqli_query(connection(), $sql);
}

//Get bookData
function getAllDataBook()
{
    $sql = "select  isbn,title,author,description,quantite,price,name_categorie,thumbnailUrl from book b join categorie c ON c.id_categorie=b.id_categorie";
    $res = mysqli_query(connection(), $sql);

    while ($row = mysqli_fetch_row($res)) {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>
            <td onclick=\"showBookDetails('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','assets/$row[7]');\" class='book_details'> " . $row[1] . "</td>
            <td>" . $row[6] . "</td>
            <td>" . $row[5] . "$ </td>
            <td>" . $row[4] . "</td>
            <td class='operations'>
            <a href =../php/delete.php?idsupp=" . $row[0] . "><img src='../assets/icons/delete.svg' alt='Edit'></a>

        <img src='../assets/icons/edit.svg' alt='Edit' onclick=\"showUpdateBox('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]');\"  >
            </td>   
        </tr>";
    }
}

//update Book 
function updateBook($isbn, $title, $author, $description,  $quantite, $price,  $id_categorie, $product_thumb)
{

    $sql = "update book set title='$title',author='$author',description='$description',quantite='$quantite',price='$price',thumbnailUrl='$product_thumb',id_categorie='$id_categorie' where isbn='$isbn'";

    if (mysqli_query(connection(), $sql)) {
        header('location: ../sub_page/dashboard.php');
    } else {
        header('location: ../sub_page/dashboard.php');
    }
}

//existanceBook
function bookExist($isbn)
{
    $test = mysqli_query(connection(), "select * from book WHERE isbn = '$isbn'");
    return mysqli_num_rows($test);
}

// getCategorie
function getAllCategorie()
{
    $sql = "select * from categorie";
    $res = mysqli_query(connection(), $sql);

    while ($row = mysqli_fetch_row($res)) {
        echo "
        <option value='$row[0]'>" . $row[1] . "</option>";
    }
}

// getAllCategorie format table
function getAllCategorieTable()
{
    $sql = "select * from categorie";
    $res = mysqli_query(connection(), $sql);

    while ($row = mysqli_fetch_row($res)) {
        echo "
        <tr>
        <td>" . $row[1] . "</td>
        <td class='operations'>
            <img src='../assets/icons/edit.svg' alt='Edit' onclick=\"showUpdateCategorieBox('$row[0]','$row[1]');\" >
            <a href =../php/delete.php?idCat=" . $row[0] . "><img src='../assets/icons/delete.svg' alt='Edit'></a>        </td>
    </tr>";
    }
}

// delete Categorie
function deleteCategorie($id_categorie)
{

    $sql = "delete from categorie where id_categorie='$id_categorie'";
    $res = mysqli_query(connection(), $sql);
}

//add categorie
function addCategorie($name_categorie)
{


    $sql = "insert into  categorie  (name_categorie )values ('$name_categorie')";

    if (mysqli_query(connection(), $sql)) {
        header('location: ../sub_page/manage_categories.php');
    } else {
        echo "alert('echec')";
        header('location: ../sub_page/manage_categories.php');
    }
}

// categorie update
function updateCategorie($id_categorie, $name_categorie)
{
    $sql = "update categorie set name_categorie='$name_categorie' where   id_categorie='$id_categorie'";
    $res = mysqli_query(connection(), $sql);
    if (mysqli_query(connection(), $sql)) {

        header('location: ../sub_page/manage_categories.php');
    } else {
        echo "alert('echec')";
        header('location: ../sub_page/manage_categories.php');
    }
}

//existanceCtegorie
function categorieExist($id_categorie)
{
    $test = mysqli_query(connection(), "select * from categorie WHERE id_categorie = '$id_categorie'");
    return mysqli_num_rows($test);
}
