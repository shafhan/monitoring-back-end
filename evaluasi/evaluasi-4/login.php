<?php
include('functions.php');
session_start();

if (isset($_SESSION['user'])) {
    header('Location: beranda.php');
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div id="out">
        <div id="in">
            <form action="" method="post">
                <ul>
                    <li>
                        <label for="username">Username: </label>
                        <input type="text" name="username" id="username" required>
                    </li>
                    <li>
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password" required>
                    </li>
                    <li>
                        <input type="submit" name="login">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    if (isset($_POST['login'])) {
        $data->login($_POST['username'], $_POST['password']);
        header('Location: beranda.php');
    } 
}
?>