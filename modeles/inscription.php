<?php

require_once(dirname(__FILE__).'/pdo_mysql.php');

if (isset($_POST['addprenom'], $_POST['addnom'], $_POST['addemail'], $_POST['addmotdepasse'])) {
    if (filter_input(INPUT_POST, 'addemail', FILTER_VALIDATE_EMAIL)) {
        $prenom = filter_input(INPUT_POST, "addprenom");
        $nom = filter_input(INPUT_POST, "addnom");
        $email = filter_input(INPUT_POST, "addemail");
        $mdp = crypt(filter_input(INPUT_POST, "addmotdepasse"));

        $stmt = $db->prepare("INSERT INTO user(prenom, nom, email, motdepasse) VALUES(:prenom, :prenom, :email, :password)");
        if (!$stmt) {
            print_r($db->errorInfo());
        } else {
            $insert = $stmt->execute(array('prenom' => $prenom, 'nom' => $nom, 'email' => $email, 'password' => $mdp));
            if (!$insert) {
                print_r($stmt->errorInfo());
            } else {
                $inscription = true;
                $rep = "index.php";
            }
        }
    } else {
        $inscription = false;
        $rep = "Adresse mail non valide.";
    }
    echo json_encode(array("inscription" => $inscription, "reponse" => $rep));
    exit();
}