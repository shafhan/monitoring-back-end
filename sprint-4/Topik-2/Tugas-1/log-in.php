<?php
if (isset($_COOKIE['user'])) {
    header('Location: logged-in.php');
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <style>
        * {
            padding: 0;margin: 0;list-style: none;
        }
        nav {
            height: 120px;
            background-color: royalblue;
            border-bottom: 3px solid black;
        }
        nav h2 {
            line-height: 120px;
            color: white;
            font-size: 40px;
            text-align: center;
        }
        div#out {
            width: 40%;
            height: 500px;
            margin: 100px auto;
            border: 4px solid royalblue;
            border-radius: 35px;
            box-shadow: 2px 2px 5px 5px royalblue;
            position: relative;
        }
        form ul {
            position: absolute;
            top: 30%;
            left: 10%;
        }
        form label {
            font-size: 50px;
        }
        fomr input {
            font-size: 50px;
            border-bottom: 5px solid royalblue;
        }
        input[type=submit] {
            padding: 20px 40px;
            border-radius: 15px;
            margin-top: 20px;
            float: right;
        }
    </style>
</head>
<body>
    <nav>
        <h2>
            Log in dengan cookie
        </h2>
    </nav>
    <div id="out">
        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">Username: </label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </li>
                <li>
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password" style="margin-left: 20px;" autocomplete="off" required>
                </li>
                <li>
                    <input type="submit" name="login" value="Log in">
                </li>
            </ul>
        </form>
    </div>
</body>
</html>
<?php 
if (isset($_POST['login'])) {
    setcookie("user[name]", $_POST['username'], time() + 3600, "/");
    setcookie("user[password]", $_POST['password'], time() + 3600, "/");
    header('Location: logged-in.php');    
}
    }
?>