<?php
require 'functions.php';
session_start();
if(isset($_SESSION['status'])) {
    echo "
        <script>
            alert('Anda telah login, maka kami akan memindahkan anda langsung ke beranda');
            window.location.href = 'beranda.php';
        </script>
    ";
}

if(isset($_POST['login'])) {
    $call->login($_POST['username'], $_POST['password']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
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
    nav button[type='submit'] {
        background-color: rgba(4,236,152, .5);
        margin-right: 40px;
        border-radius: 5px;
        position: relative;
        color: #fff;
        z-index: 1;
        transition: color .4s;
    }
    nav button[type='submit'] a {
        display: block;
        padding: 10px 20px;
        color: #fff;
        transition: color .4s;
    }
    nav span {
        width: 0%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: linear-gradient(45deg, #04b4dc, #34cce4);
        z-index: -1;   
        transition: .8s;
    }
    nav button[type='submit']:hover span {
        width: 100%;
    }
    nav button[type='submit']:hover a{
        color: #000000;
    }
    #login-form {
        background: rgba(0, 0, 0, .5);
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
        margin: 80px auto;
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
        margin-left: 120px;
        margin-bottom: 30px;
    }
    #form input {
        width: 60%;
        margin-bottom: 20px;
        height: 25px;
        border: 0;
        outline: none;
        border-bottom: 4px double #00ec96;
    }
    #form button[type='submit'] {
        background-color: rgba(0,0,0, .4);
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
        transition: 1s;
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
            <h2>LOGIN PAGE</h2>
            <form action="" method="post">
                <button type="submit" name="register"><a href="register.php"><span></span>Register</a></button>
            </form>
        </nav>
        <div id="login-form">
            <div id="left-side">
                <div id="form">
                    <img src="images/user.png" id="image-top">
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
                                <button type="submit" name="login"><span></span>Log in</button>
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