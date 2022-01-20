<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/sign_in.css?v=<?php echo time(); ?>">
    <title>Sign in</title>
</head>

<body>
    <div class="container">
        <div class="left_container">
            <img src="assets/thumb_signin.svg" alt="thumb">
        </div>
        <div class="right_container">
            <h2>Sign in to get <span style="color: #5B327A;">Started!</span></h2>
            <form action="php/login.php" method="POST">
                <input type="text" name="user_name" placeholder="User Name" class="custom_input" required>
                <input type="password" name="password" placeholder="Passwrod" class="custom_input" required>
                <button class="sign_in" onclick="" value="click here">Sign in</button>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                    if ($_GET['error'] == 'invalideuser') {
                        echo "<p class =\"error\">Invalide User</p>";
                    }
                }
                ?>
            </form>
        </div>
    </div>
</body>

</html>