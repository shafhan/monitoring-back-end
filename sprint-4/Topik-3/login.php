<?php
session_start();
if (isset($_SESSION['status'])) {
    header('beranda.php');
} 
require 'autentikasi.php';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = $call->login($username, $password);
    if ($login['status'] == '!akun') {
        echo "
            <script>
                alert('Akun dengan username tersebut tidak ada!');
            </script>
        ";
    } elseif ($login['status'] == '!password') {
        echo "
            <script>
                alert('Passwordnya salah mas bree!');
            </script>
        ";
    } else {
        $_SESSION['status'] = 'logged_in';
        $_SESSION['name'] = $username;
        header('Location: beranda.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            list-style: none;
        }
        body {
            height: 120vh;
            background: url(images/login-page.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        #box-out {
            position: absolute;
            top: 160px;
            left: 545px;
            width: 800px;
            height: 800px;
            border-radius: 50%;
        }
        #login {
            width: 45%;
            height: 45%;
            margin: 200px auto;
            border: 5px solid #b4d0ff;
            border-radius: 35px;
        }
        #picture {
            width: 100px;
            margin: 20px auto;
        }
        form ul {
            font-size: 30px;
            text-align: center;
            margin-top: 20px;
        }
        form label {
            display: block;
        }
        form input {
            padding: 5px 10px;
            border: 2px solid #d689e9;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div id="box-out">
        <div id="login">
            <div id="picture">
                <img src="images/admin.png" width="100px">
            </div>

            <form action="" method="post">
                <ul>
                    <li>
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" autocomplete="off" required>
                    </li>
                    <li>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </li>
                    <li>
                        <input type="submit" name="login" value="login">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>
</html>