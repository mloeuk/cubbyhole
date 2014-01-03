<?php

if (isset($_POST['email'], $_POST['motdepasse'])) { # Si le formulaire est soumis
    echo "YOUYOU"; exit();
    if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $email = filter_input(INPUT_POST, "email");
        $mdp = crypt(filter_input(INPUT_POST, "motdepasse"));

        $return = $db->prepare('SELECT password, prenom, nom, iduser FROM user WHERE email = :email');
        $return->bindValue(':email', $email, PDO::PARAM_STR);
        $data = $return->execute();

        if ($data['password'] === $mdp) {
            $_SESSION['iduser'] = $data['iduser'];
            $_SESSION['nom'] = $data['nom'];
            $_SESSION['prenom'] = $data['prenom'];

            header('Location: ./index.php');
            exit();
        } else {
            echo "Identifiant ou Mot de passe incorrect.";
        }
    } else {
        echo "E-mail invalide";
    }
}