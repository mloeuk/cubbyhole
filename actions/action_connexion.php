<?php

require_once('pdo_mysql.php');

if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
    $email = filter_input(INPUT_POST, "email");
    $mdp = crypt(filter_input(INPUT_POST, "motdepasse"));

    $return = $db->prepare('SELECT password, prenom, nom, id FROM user WHERE email = :email');
    $return->bindValue(':email', $email, PDO::PARAM_STR);
    $data = $return->execute();

    if ($data['password'] === $mdp) {
        session_start();
        $_SESSION['id'] = $data['id'];
        $_SESSION['nom'] = $data['nom'];
        $_SESSION['prenom'] = $data['prenom'];

        header('Location: ...');
        exit();
    } else {
        echo "Identifiant ou Mot de passe incorrect.";
    }
} else {
    echo "E-mail invalide";
}

$db = null;