<?php

    session_start();
    require __DIR__ . '/data/credentials.php';

    if(isset($_POST['submit'])) {
        $username = $_POST['username'] ?? '';
        $passwd = $_POST['password'] ?? '';

        if ($username === $login && $password === $passwd) {
            $_SESSION['connected'] = true;
            $_SESSION['username'] = $username;
            header('Location: /chapter/index.php');
        } else {
            echo "Nom d'utilisateur ou mot de passe invalide";
        }
    }
?>

<h1>Mon site de révision</h1>

<form action="/index.php" method="post">

    <label for="username">Prénom</label>
    <input type="text" name="username" id="username">

    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password">

    <input type="submit" id="submit" name="submit">
</form>