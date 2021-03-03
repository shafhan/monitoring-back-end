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
$username = $_SESSION['username'];
$result = $call->showAll("SELECT user.username,content_page.* FROM user INNER JOIN content_page ON user.id = content_page.user_id ");
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
    .effect a {
        padding: 10px 20px;
        background-color: #00c9c4;
        border: 1px solid #fff;
        border-radius: 5px;
        color: #fff;
        position: relative;
        z-index: 1  ;
        transition: .4s;
    }
    .effect a span {
        width: 0%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #00a4f6;
        z-index: -1;
        transition: .8s;
    }
    td.effect a:hover span {
        width: 100%;
    }
    td.effect a:hover {
        color: #000000;
    }
    #button {
        width: 13%;
        height: 40px;
        margin: 20px auto;
    }
    #button button[type='submit'] {
        background-color: rgba(4,236,152, .5);
        margin-right: 40px;
        border-radius: 5px;
        position: relative;
        color: #fff;
        z-index: 1;
        transition: color .4s;
    }
    #button button[type='submit'] a {
        display: block;
        padding: 10px 50px;
        color: #fff;
        transition: color .4s;
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
    #button button[type='submit']:hover a{
        color: #000000;
    }
    </style>
</head>
<body>
    <div id="top">
        <nav>
            <h2>HOME PAGE</h2>
            <form action="" method="post">
                <button type="submit" name="logout"><span></span>Log out</a></button>
            </form>
        </nav>
        <div id="table-user">
            <div id="table">
                <table border="1" cellpadding="5">
                    <tr>
                        <th>No</th>
                        <th style="width: 30%;">User name</th>
                        <th style="width: 35%;">Title</th>
                        <th>Aksi</th>
                    </tr>
                    <?php $i =1 ?>
                    <?php foreach ($result as $row): ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $row['username'] ?></td>
                        <td><?= $row['judul'] ?></td>
                        <td class="effect"><a href="edit.php?id=<?= $row['id'] ?>"><span></span>Edit</a> Or <a href="delete.php?id=<?= $row['id'] ?>"><span></span>Delete</a></td>
                    </tr>
                    <?php $i++ ?>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="4" class="effect"><a href="all-page.php"><span></span>VIEW ALL PAGE</a></td>
                    </tr>
                </table>     
                <div id="button">
                <button type="submit"><a href="add-content.php"><span></span>Add content</a></button>
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