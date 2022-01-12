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
                <a href="">Home</a>
                <a href="" class="addbook-btn">Add Book</a>
                <a href="" class="addCategorie-btn">Add Categories</a>
                <a href="">Statistic</a>
            </nav>
            <a href="../index.php" class="logout">Logout</a>
        </div>

        <!-- Dashboard Details -->
        <div class="right_container">
            <div class="nav_bar">
                <img class="menu_icon" src="../assets/icons/menu.png" alt="menu icons">
                <div class="search_container">
                    <img src="../assets/icons/search.png" alt="">
                    <input type="text" name="search" placeholder="Search">
                </div>
                <div></div>
            </div>
            <div class="table">
                <table>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Categories</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Operations</th>
                    <div class="details">
                        <tr>
                            <td>01</td>
                            <td>Book 1</td>
                            <td>Sience</td>
                            <td>88.99$</td>
                            <td>33</td>
                            <td class="operations">
                                <img src="../assets/icons/edit.png" alt="Edit">
                                <img src="../assets/icons/delete.png" alt="Delete">
                            </td>
                        </tr>

                    </div>
                </table>
            </div>
        </div>
    </section>
    <!-- Form Add Edit Products -->
    <section class="crud-form-products">
        <Form class="custom-form-products">
            <input type="text" name="bookname" placeholder="Book Name">
            <input type="text" name="author" placeholder="Author">
            <div class="custom-select">
                <select name="" id="">
                    <option value="0">categories 1</option>
                    <option value="1">categories 2</option>
                    <option value="2">categories 3</option>
                    <option value="3">categories 4</option>
                </select>
            </div>
            <textarea name="description" id="" cols="30" rows="10" placeholder="Description"></textarea>
            <div class="price-quantity">
                <input type="number" name="price" placeholder="Price">
                <input type="number" name="quantity" placeholder="Quantity">
            </div>
            <div class="submit-cancel">
                <button class="submit">Submit</button>
                <button class="cancel">Cancel</button>
            </div>
        </Form>
    </section>
    <!-- Form Add Edit Categories -->
    <section class="crud-form-categorie">
        <Form class="custom-form-categorie">
            <input type="text" name="categorie" placeholder="Categorie">
            <div class="submit-cancel">
                <button class="submit">Submit</button>
                <button class="cancel">Cancel</button>
            </div>
        </Form>
    </section>
    <script src="../scripts/dashboard.js?v=<?php echo time(); ?>"></script>
</body>

</html>