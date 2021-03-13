<?php
if(!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman about</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="<?= BASEURL; ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/santri">Santri</a>
            </li>
            <form action="" method="post">
                <li class="nav-item">
                    <input type="submit" value="Log out" name="register">
                </li>
                <li class="nav-item">
                    <input type="submit" value="Log out" name="logout">
                </li>
            </form>
    </ul>
    </div>
</div>
</nav>
<?php
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL . '/login');
    }
?>