<?php
session_start();

if (empty($_SESSION['user'])) {
    // print_r($_SESSION['user']);
    header('Location: log-in.php');
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged in</title>
    <style>
        * {
            padding: 0;margin: 0;
        }
        body {
            background: rgba(0, 0, 0, .1);
        }
        nav {
            height: 120px;
            background-color: royalblue;
            border-bottom: 4px solid black;
        }
        nav h2 {
            color: white;
            font-size: 45px;
            line-height: 120px;
            text-align: center;
        }
        #main h2 {
            margin-top: 150px;
            font-size: 100px;
            text-align: center;
        }
        #main h1 {
            margin-top: 50px;
            font-size: 120px;
            background: linear-gradient(to bottom, royalblue, black);
            color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
            text-align: center;
        }
        button {
            padding: 20px 40px;
            border: 2px double royalblue;
            border-radius: 20px;
            margin-top: 50px;
            margin-left: 47%;
        }
    </style>
</head>
<body>
    <nav>
        <h2>Logged in with session</h2>
    </nav>
    <div id="main">
        <h2>
            WELCOME
        </h2>
        <h1><?= $_SESSION['user']['name'] ?></h1>
        <form action="" method="post">
            <button type="submit" name="logout">Log out</button>
        </form>
    </div>
    <?php 
    ?>
</body>
</html>
<?php
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy(); 
    header('Location: log-in.php');
}
    } 
?>