<?php
require 'functions.php';
session_start();
if (empty($_SESSION['status'])) {
    echo "
        <script>
            alert('Login dulu coy!');
            window.location.href = 'index.php';
        </script>
    ";
}
$category = $_GET['category'];
$result = $call->showAll("SELECT content_page.*, user.username FROM content_page, user WHERE category = '$category'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
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
    nav button[type='submit']  {
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
    nav button[type='submit']:hover {
        color: #000000;
    }
    #table-user {
        background: rgba(0, 0, 0, .5);
        width: 80%;
        min-height: 500px;
        margin: 100px auto;
    }
    #table {
        width: 90%;
        margin: 0 auto;
        padding: 20px 0;
    }
    #table table {
        width: 100%;
        border-collapse: collapse;
        height: 100px;
        color: #fff;
        text-align: center;
    }
    #table table th {
        height: 50px;
    }
    #table table td {
        height: 120px;
    }
    #button {
        background: red;
        width: 12%;
        height: 40px;
        margin: 0 auto;
    }
    #button button[type='submit'] {
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
    #button span {
        width: 0%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: linear-gradient(45deg, #04b4dc, #34cce4);
        z-index: -1;   
        transition: .8s;
    }
    #button button[type='submit']:hover span {
        width: 100%;
    }
    #button button[type='submit']:hover {
        color: #000000;
    }
    #back {
        margin-left: 47%;
    }
    #back button {
        background-color: rgba(4,236,152, .5);
        margin-right: 40px;
        margin-top: 40px;
        border-radius: 5px;
        position: relative;
        color: #fff;
        z-index: 1;
        transition: color .4s;
    }
    #back button a {
        display: block;
        padding: 10px 20px;
        color: #fff;
        transition: color .4s;
    }
    #back span {
        width: 0%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: linear-gradient(45deg, #04b4dc, #34cce4);
        z-index: -1;   
        transition: .8s;
    }
    #back button a:hover span {
        width: 100%;
    }
    #back button:hover a{
        color: #000000;
    }
    </style>
</head>
<body>
    <div id="top">
        <nav>
            <h2>HOME PAGE</h2>
            <!-- tambahin image redirect to index.php -->
        </nav>
        <div id="table-user">
            <div id="table">
                <table border="1" cellpadding="5">
                    <tr>
                        <th style="width: 8%;">No</th>
                        <th style="width: 30%;">Username</th>
                        <th style="width: 30%;">Title</th>
                        <th>Category</th>
                    </tr>
                    <?php $i = 1 ?>
                    <?php foreach ($result as $row):?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $row['username'] ?></td>
                        <td><a href="content.php?id=<?= $row['id'] ?>"><?= $row['judul'] ?></a></td>
                        <td><?= $row['category'] ?></td>
                    </tr>
                    <?php $i++ ?>
                    <?php endforeach; ?>
                </table>
                <div id="back">
                    <button><a href="beranda.php"><span></span>Previous page</a></button>
                </div>
            </div>
        </div>
        </div>
    </div>
    
</body>
</html>
<?php
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: index.php');
}
?>