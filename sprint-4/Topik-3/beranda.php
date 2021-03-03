<?php
session_start();
if (empty($_SESSION['status'])) {
    echo "
            <script>
                alert('Login dahulu!');
                window.location.href = 'login.php';
            </script>
        ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 'Mont';
        }
        nav {
            background: rgba(27, 112, 118, .5);
            height: 80px;
            /* border-bottom: 2px solid white; */
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 20px;
        }
        nav h1 {
            margin-left: 30px;
        }
        nav button {
            padding: 10px 20px;
            margin-right: 30px;
            background-color: #b4dad9;
            border: 3px solid #132523;
            border-radius: 20px;
        }
        #contain {
            height: 100vh;
            background: url(images/beranda-page.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        #contain h2{
            font-size: 100px;
            text-align: center;
            padding-top: 150px;
        }
    </style>
</head>
<body>
    <nav>
        <h1>Login successful!</h1>
        <form action="" method="post">
            <button type="submit" name="logout" onclick="return confirm('Seriusan mau logout nich?');">Log out</button>
        </form>
    </nav>
    <div id="contain">
        <h2>Selamat datang <br><?= $_SESSION['name'] ?></h2>
    </div>
    
</body>
</html>
<?php
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: login.php');
}
?>