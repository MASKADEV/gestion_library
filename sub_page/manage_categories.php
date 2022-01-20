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
                <img src="../assets/icons/add.svg" style="margin-left:40px" class="addCategorie-btn">
            </div>
            <div class="table">
                <table>
                    <th>Categories</th>
                    <th>Operations</th>
                    <div class="details">
                        <!-- get allCategorie -->
                        <?php
                        include '../php/functions.php';
                        getAllCategorieTable();
                        ?>
                    </div>
                </table>
            </div>
        </div>
    </section>
    <!-- Form Add Edit Categories -->
    <section class="crud-form-categorie">
        <Form action="../php/addEditBook.php" class="custom-form-categorie">
            <input type="text" id="id_categorie" name="id_categorie"><br><br>
            <input type="text" name="name_categorie" id="name_categorie" placeholder="Categorie">
            <div class="submit-cancel">
                <button class="submit">Submit</button>
                <a type="button" value="cancel" onclick=resteManageCategorie() class="cancel">Cancel</a>
            </div>
        </Form>
    </section>
    <!-- Form Add Edit Products -->
    <section class="crud-form-products">
        <Form class="custom-form-products">
            <input type="text" name="bookname" placeholder="Book Name">
            <input type="text" name="author" placeholder="Author">
            <input type="file" class="product_thumb" name="product_thumb">
            <div class="custom-select">
                <select name="" id="">
                    <!-- get categorie from database    -->
                    <?php
                    getAllCategorie();
                    ?>
                </select>
            </div>
            <textarea name="description" id="" cols="30" rows="10" placeholder="Description"></textarea>
            <div class="price-quantity">
                <input type="number" name="price" placeholder="Price">
                <input type="number" name="quantity" placeholder="Quantity">
            </div>
            <div class="submit-cancel">
                <button class="submit">Submit</button>
                <input type="button" value="cancel" onclick=resteDashboard() class="cancel">
            </div>
        </Form>
    </section>
    <script src="../scripts/manage_categories.js?v=<?php echo time(); ?>"></script>
</body>

</html>