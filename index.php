<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/sign_in.css">
    <title>Sign in</title>
</head>

<body>
    <div class="container">
        <div class="left_container">
            <img src="assets/thumb_signin.svg" alt="thumb">
        </div>
        <div class="right_container">
            <h2>Sign in to get <span style="color: #5B327A;">Started!</span></h2>
            <input type="text" name="user_name" placeholder="User Name" class="custom_input">
            <input type="password" name="password" placeholder="Passwrod" class="custom_input">
            <button class="sign_in" onclick="parent.location='sub_page/dashboard.php'" value="click here">Sign in</button>
        </div>
    </div>
</body>

</html>