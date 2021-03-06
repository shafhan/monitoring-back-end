<?php
require 'functions.php';
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
if (isset($_POST['register'])) {
    if($password !== $password2) {
        echo "
            <script>
                alert('Konfirmasi kata sandi anda salah');
            </script>
        ";
    } else {
        if($call->register($username, $password) > 0) {
            echo "
            <script>
                alert('Selamat anda telah berhasil mendaftar, silahkan login');
                window.location.href = 'index.php';
            </script>
            ";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <style>
    * {
        padding: 0;
        margin: 0;
        list-style: none;
        text-decoration: none;
    }
    #top {
        background: linear-gradient(-45deg, #00a4f6, #00c9c4, #00e2a2);
        height: 110vh;
    }
    nav {
        height: 100px;
        background-color: rgba(0, 0, 0, .2);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    nav h2 {
        margin-left: 30px;
    }
    #login-form {
        background: rgba(0, 0, 0, .4);
        width: 80%;
        height: 500px;
        margin: 100px auto;
    }
    #left-side {
        /* background: chartreuse; */
        width: 60%;
        height: 100%;
        float: left;
    }
    #form {
        width: 85%;
        margin: 50px auto;
        margin-left: 100px;
    }
    #right-side {
        width: 40%;
        height: 100%;
        float: right;
    }
    #right-side {
        background: linear-gradient(#04ec98, #94e9e7);
        border-top-left-radius: 100%;
    }
    #image-top {
        margin-left: 180px;
        margin-bottom: 30px;
    }
    #form input {
        width: 60%;
        margin-bottom: 20px;
        margin-left: 10px;
        height: 25px;
        border: 0;
        outline: none;
        border-bottom: 4px double #00ec96;
    }
    #form button[type='submit'] {
        background-color: rgba(0,0,0, .6);
        margin-top: 10px;
        padding: 10px 30px;
        border-radius: 5px;
        position: relative;
        color: #fff;
        z-index: 1;
        transition: color .4s;
        cursor: pointer;
    }
    #form span {
        width: 0%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: linear-gradient(45deg, #04b4dc, #34cce4);
        z-index: -1;   
        transition: .8s;
    }
    #form button[type='submit']:hover span {
        width: 100%;
    }
    #form button[type='submit']:hover {
        color: #000000;
    }
    </style>
</head>
<body>
    <div id="top">
        <nav>
            <h2>REGISTER PAGE</h2>
        </nav>
        <div id="login-form">
            <div id="left-side">
                <div id="form">
                    <img src="images/add-user.png" id="image-top">
                    <form action="" method="post">
                        <ul>
                            <li>
                                <img src="images/login.png" width="44px">
                                <input type="text" name="username" autocomplete="off" placeholder="Username..." class="border" required>
                            </li>
                            <li>
                                <img src="images/key.png" width="44px">
                                <input type="password" name="password" placeholder="Password..." class="border" required>
                            </li>
                            <li>
                                <img src="images/key.png" width="44px">
                                <input type="password" name="password2" placeholder="Confirm password..." class="border" required>
                            </li>
                            <li>
                                <button type="submit" name="register"><span></span>Register</button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
            <div id="right-side"></div>
        </div>
    </div>
    
</body>
</html>