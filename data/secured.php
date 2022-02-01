<?php
//Vérifie que les champs existent

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['age']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['passwordR'])) {
    //Récupère l'âge sous forme de nombre entier puis si champs inférieur à 0 alors age est équivalent à la valeur donnée, soit 10.
    //ça fera une erreur de connexion car l'âge sera inférieur à l'âge requis.
    $age = intval($_POST['age']);
    if($age < 14 || $age > 100) {
        $age = 10;
    }
}
else {
    header('Location: /chapter/index.php');
}

