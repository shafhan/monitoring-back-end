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
$result = $call->showAll("SELECT * FROM user WHERE username = '$username'")[0];

if(isset($_POST['upload'])) {
    $call->addData($_POST); 
    header('Location: beranda.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add content page</title>
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
    #add-content-form {
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
        margin: 10px auto;
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
    .input {
        width: 80%;
        margin-bottom: 20px;
        height: 30px;
        border: 0;
        outline: none;
        background-color: rgba(0, 0, 0, .1);
        border-bottom: 4px double #00ec96;
        color: white;
    }
    ::placeholder {
        color: white;
    }
    #textarea {
        height: 250px;
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
            <h2>ADD CONTENT PAGE</h2>
        </nav>
        <div id="add-content-form">
            <div id="left-side">
                <div id="form">
                    <form action="" method="post" enctype="multipart/form-data">
                        <ul>
                            <li>
                                <input class="input" type="file" name="gambar" required>
                            </li>
                            <li>
                                <input type="hidden" name="id" value="<?= $result['id'] ?>">
                            </li>
                            <li>
                                <input class="input" type="hidden" name="username" value="<?= $result['username'] ?>" required>
                            </li>
                            <li>
                                <input class="input" type="input" name="judul" placeholder="Title..." required>
                            </li>
                            <li>
                                <textarea class="input" id="textarea" name="content" placeholder="Content..."></textarea>
                            </li>
                            <li>
                                <input class="input" type="input" name="kategori"  placeholder="Category..." required>
                            </li>
                            <li>
                                <button type="submit" name="upload"><span></span>Upload</button>
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