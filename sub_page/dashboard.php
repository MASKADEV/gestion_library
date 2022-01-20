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
            <a href="../index.php" class="logout">Logout</a>
        </div>
        <!-- Dashboard Details -->
        <div class="right_container">
            <div class="nav_bar">
                <img class="menu_icon" src="../assets/icons/menu.svg" alt="menu icons">
                <div class="search_container">
                    <img src="../assets/icons/search.png" alt="">
                    <input type="text" name="search" placeholder="Search">
                </div>
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
                        getAllDataBook();
                        ?>
                    </div>
                </table>
            </div>
        </div>
    </section>
    <!-- Form Add Edit Products -->
    <section class="crud-form-products">
        <Form action="../php/addEditBook.php" class="custom-form-products">
            <input type="text" name="isbn" id="isbn" placeholder="isbn">
            <input type="text" name="bookname" id="bookname" placeholder="Book Name">
            <input type="text" name="author" id="author" placeholder="Author">
            <input type="file" class="product_thumb" name="product_thumb" id="product_thumb">
            <div class="custom-select">
                <select name="categorie" id="categorie">
                    <!-- get categorie from database -->
                    <?php
                    getAllCategorie();
                    ?>
                </select>
            </div>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea>
            <div class="price-quantity">
                <input type="number" name="price" id="price" placeholder="Price">
                <input type="number" name="quantity" id="quantity" placeholder="Quantity">
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
                <!-- <img id="product_thumbB" src="" alt="Book cover"> -->
                <h1 id="product_thumbB"></h1>
            </div>
            <div class="right_container_details">
                <div class="title-book-details">
                    <h2 id="titleB">Book Title</h2>
                    <h2 class="close-book-details">X</h2>
                </div>
                <!-- <h3><span>by</span> Mia Jackson</h3>
                <h3><span>price</span> 49.99$</h3>
                <h3><span>categorie</span> Java</h3>
                <h3><span>Isbn</span> 121312</h3> -->
                <h3 id="authorB">
                    < Mia Jackson</h3>
                        <h3 id="priceB"> 49.99$</h3>
                        <h3 id="categorieB"> Java</h3>
                        <h3 id="isbnB"> 121312</h3>
                        <h3 id="quantityB"> 121312</h3>


                        <p id="descriptionB" class="book-preview">Book Preview</p>
            </div>
        </div>
    </section>
    <script src="../js/dashboard.js?v=<?php echo time(); ?>">
    </script>
</body>

</html>