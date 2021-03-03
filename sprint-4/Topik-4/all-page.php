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
$result = $call->showAll("SELECT content_page.* FROM content_page INNER JOIN user ON user.id = content_page.user_id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content page</title>
    <style>
    * {
        padding: 0;
        margin: 0;
        list-style: none;
        text-decoration: none;
    }
    #top {
        background: linear-gradient(-45deg, #00a4f6, #00c9c4, #00e2a2);
        min-height: 110vh;
        padding-bottom: 50px;
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
    #page-view {    
        width: 80%;
        min-height: 500px;
        margin:  80px auto;
    }
    #content {
        background-color: white;
        width: 80%;
        min-height: 600px;
        margin: 0 auto;
        box-shadow: 5px 5px 20px 0 #000000;
    }
    #image {
        width: 18%;
        margin: 50px auto;
        padding-top: 20px;
    }
    #judul {
        text-align: center;
    }
    #uploaded-content {
        min-height: 100px;
        margin: 50px auto;
    }
    #uploaded_content h3 {
        font-size: 30px;
    }
    #back {
        margin-left: 47%;
    }
    #back button {
        background-color: rgba(4,236,152, .5);
        margin-right: 40px;
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
            <h2>CONTENT PAGE</h2>
        </nav>
        <div id="page-view">
            <?php foreach ($result as $row): ?>
                <div id="content">
                    <div id="image">
                        <img src="images/<?= $row['gambar'] ?>" width="250px">
                    </div>
                    <h2 id="judul"><?= $row['judul'] ?></h2>
                    <div id="uploaded-content">
                        <h3><?= $row['content'] ?></h3>
                    </div>
                    <div id="kategori">
                        <p>Kategori: <a href="page-per-category.php?category=<?= $row['category'] ?>"><?= $row['category'] ?></a></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div id="back">
            <button><a href="beranda.php"><span></span>Previous page</a></button>
        </div>
    </div>
    
</body>
</html>