<?php 
session_start();
if(isset($_SESSION['is_logedin'])){

}else{
    header('location: ../index.php');

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/dashboard.css?v=<?php echo time(); ?>">
    <title>Dashboard</title>
</head>

<body>
    <section class="container">
        <!-- Side Bar Menu  -->
        <div class="left_container">
            <div class="side_bar_logo">
                <h1>SHOPNOW</h1>
                <h3 class="hide_sideBar">X</h3>
            </div>
            <nav class="side_bar">
                <a href="./dashboard.php">Home</a>
                <a href="" class="addbook-btn">Add Book</a>
                <a href="./manage_categories.php">Manage Categories</a>
                <!-- <a href="">Statistic</a> -->
            </nav>
        <a href="../php/login.php?logout=1" class="logout"><img src="../assets/icons/logout.svg" alt="logout" style="height: 40px; fill:white;"></a>
        </div>
        <!-- Dashboard Details -->
        <div class="right_container">
            <div class="nav_bar">
                <img class="menu_icon" src="../assets/icons/menu.svg" alt="menu icons">
                <Form method="GET" action="dashboard.php">
                    <div class="search_container">
                        <button type="submit" class="search-btn"><img src="../assets/icons/search.png"></button>
                        <input type="text" name="search" placeholder="Search">
                    </div>
                </Form>
                <div></div>
            </div>
            <div class="table">
                <table>
                    <th>Isbn</th>
                    <th>Name</th>
                    <th>Categories</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Operations</th>
                    <div class="details">
                    <?php
                        include '../php/functions.php';
                        if (isset($_GET['search']) && !empty($_GET['search'])){
                            searchForBook($_GET['search']);

                        }else{
                               fetchBook();

                        }
                          
                       
                        ?>
                    </div>
                </table>
            </div>
        </div>
    </section>
    <!-- Form Add Edit Products -->
    <section class="crud-form-products">
        <Form action="../php/addEditBook.php" enctype='multipart/form-data' class="custom-form-products" method="POST">
            <input type="text" name="isbn" id="isbn" placeholder="isbn" required>
            <input type="text" name="bookname" id="bookname" placeholder="Book Name" required>
            <input type="text" name="author" id="author" placeholder="Author" required>
            <input type="file" class="product_thumb" name="product_thumb" id="product_thumb" required>
            <div class="custom-select">
                <select name="categorie" id="categorie" required>
                    <!-- get categorie from database -->
                    <?php
                    getAllCategorie();
                    ?>
                </select>
            </div>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Description" required></textarea>
            <div class="price-quantity">
                <input type="number" name="price" id="price" placeholder="Price" required>
                <input type="number" name="quantity" id="quantity" placeholder="Quantity" required>
            </div>
            <div class="submit-cancel">
                <button class="submit" type="submit">Submit</button>
                <input type="button" value="cancel" onclick=resteDashboard() class="cancel">
            </div>
        </Form>
    </section>
    <!-- Book Details -->
    <section class="book-details">
        <div class="container-details">
            <div class="left_container_details">
                <img id="product_thumbB"  alt="Book cover">
            </div>
            <div class="right_container_details">
                <div class="title-book-details">
                    <h2 id="titleB">Book Title</h2>
                    <h2 class="close-book-details">X</h2>
                </div>
                <h3 id="authorB">
                    Author</h3>
                <h4 id="priceB"></h4>
                <h4 id="categorieB"></h4>
                <h4 class="book-preview">Preview</h4>
                <p id="descriptionB"></p>
            </div>
        </div>
    </section>
    <script src="../js/dashboard.js?v=<?php echo time(); ?>">
    </script>
</body>

</html>