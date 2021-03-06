<?php

require 'req.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        padding: 0;
        margin: 0;
        text-align: center;
    }
    nav {
        height: 100px;
        background-color: black;
        color: white;
        font-size: 40px;
        line-height: 100px;
    }
    h2 {
        font-size : 30px;
        margin: 20px 0;
    }
    .input {
        margin: 20px 0;
        padding: 20px 100px;
        font-size: 25px;
    }
    </style>
</head>
<body>
<?php
    if (isset($_POST['login'])) {
        
    } else {
?>
    <nav>
        Login page
    </nav>
    <form action="" method="post">
        <h2>--Email--</h2>
        <input type="text" name="email" class="input">
        <h2>--Pasword--</h2>
        <input type="password" name="password" class="input"><br>
        <input type="submit" name="login" value="Log in" class="input">
    </form>
<?php } ?>
</body>
</html>