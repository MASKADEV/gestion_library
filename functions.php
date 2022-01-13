<?php 

//connction 
function connection(){

return mysqli_connect("localhost", "root", "","gestionstockbiblio");
}

//login
function login($username,$pass){
$sql=("select * from admin WHERE username='$username' and Password='$pass'");
$res=mysqli_query(connection(),$sql);
if(mysqli_num_rows($res)==1){
   header('location: sub_page/dashboard.php');
}else 
header('location: index.php');    
}

 //insert bookData
function addBook( $isbn, $title, $author,$description,  $quantite, $price,  $id_categorie  ){


    $sql="insert into book values('$isbn', '$title', '$author','$description',  '$quantite', '$price',  '$id_categorie') ";
    
        if(mysqli_query(connection(),$sql)){
   header('location: sub_page/dashboard.php');
       
    }
    else{
        echo "echec";

    }

}

// delete Book
function deleteBook($isbn) {

$sql="delete from book where isbn='$isbn'";
$res=mysqli_query(connection(),$sql);

// if(mysqli_query(connection(),$sql)){
//     echo"bien supprimé !";  
// }
// else
//     echo "echec";

} 

//get bookData
function getAllDataBook(){

    $sql="select * from book";
    $res=mysqli_query(connection(),$sql);

    while($row=mysqli_fetch_row($res)){
      
      echo "<tr>" ;
       echo "<td>".$row[0]."</td>
        <td>".$row[1]."</td>
        <td>".$row[6]."</td>
        <td>".$row[5]."</td>
        <td>".$row[4]."</td>
        <td class='operations'>
        <a href =../delete.php?idsupp=".$row[0]."><img src='../assets/icons/delete.png' alt='Edit'></a>

        <img src='../assets/icons/edit.png' alt='Edit' onclick=showUpdateBox('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]')>
        </td>
    </tr>";
    }

}
//update Book 
function updateBook($isbn, $title, $author,$description,  $quantite, $price,  $id_categorie ){

       // $test=mysqli_query(connection(),"select * from book WHERE isbn = '$isbn'");
        $sql="update book set title='$title',author='$author',description='$description',quantite='$quantite',price='$price',id_categorie='$id_categorie' where isbn='$isbn'";
        $res= mysqli_query(connection(),$sql);
//     if(mysqli_num_rows($test)==1){
            //$sql="update book set title='$title',author='$author',description='$description',quantite='$quantite',price='$price',id_categorie='$id_categorie' where isbn='$isbn'";
if(mysqli_query(connection(),$sql)){
    header('location: sub_page/dashboard.php');
        
     }
     else{
         echo "echec";
 
     }
//     }else{

// echo"isbn du book faux";
//     }

}

// getCategorie
function getAllCategorie(){
    $sql="select id_categorie from categorie";
    $res=mysqli_query(connection(),$sql);
   
    while($row=mysqli_fetch_row($res)){
        echo"
        <option value='$row[0]'>".$row[0]."</option>";
    
} 
 }
 //existanceBook
 function bookExist($isbn){
     $test=mysqli_query(connection(),"select * from book WHERE isbn = '$isbn'");
        return mysqli_num_rows($test);

 }

    
?>