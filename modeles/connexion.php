<?php

session_start();
require_once(dirname(__FILE__) . '/pdo_mysql.php');

if (isset($_POST['email'], $_POST['motdepasse'])) {
    $cnx = false;
    if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $rep = "";
        $cnx = false;
        $email = filter_input(INPUT_POST, "email");
        $mdp = sha1(filter_input(INPUT_POST, "motdepasse"));

        try {
            $query = $db->prepare("SELECT iduser, nom, prenom FROM user WHERE email = :email AND motdepasse = :motdepasse");
            $query->execute(array('email' => $email, 'motdepasse' => $mdp));
            $user = $query->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            $reponse = $e->getMessage();
        }

        if ($user !== false) {
            $_SESSION['iduser'] = $user->iduser;
            $_SESSION['nom'] = $user->nom;
            $_SESSION['prenom'] = $user->prenom;

            $cnx = true;
            $rep = "index.php?page=mycubby";
        } else {
            $rep = "Identifiant ou Mot de passe incorrect.";
        }
    } else {
        $rep = "Adresse mail non valide.";
    }
    echo json_encode(array("connexion" => $cnx, "reponse" => $rep));
    exit();
}