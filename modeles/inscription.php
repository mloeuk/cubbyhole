<?php

require_once(dirname(__FILE__).'/pdo_mysql.php');

if (isset($_POST['addprenom'], $_POST['addnom'], $_POST['addemail'], $_POST['addmotdepasse'])) {
    $inscription = false;
    if (filter_input(INPUT_POST, 'addemail', FILTER_VALIDATE_EMAIL)) {
        $prenom = filter_input(INPUT_POST, "addprenom");
        $nom = filter_input(INPUT_POST, "addnom");
        $email = filter_input(INPUT_POST, "addemail");
        $mdp = sha1(filter_input(INPUT_POST, "addmotdepasse"));

        //Mettre champ email unique pour l'inscription
        $stmt = $db->prepare("INSERT INTO user(prenom, nom, email, motdepasse) VALUES(:prenom, :prenom, :email, :password)");
        if (!$stmt) {
            print_r($db->errorInfo());
        } else {
            $insert = $stmt->execute(array('prenom' => $prenom, 'nom' => $nom, 'email' => $email, 'password' => $mdp));
            if (!$insert) {
                print_r($stmt->errorInfo());
            } else {
                $id = $db->lastInsertId();
                
                //Créer du dossier de l'utilisateur
                $structure = $_SERVER["DOCUMENT_ROOT"].'/cubbyhole/users/'.$id;

                if (!mkdir($structure, 0777, true)) {
                    die('Echec lors de la création des répertoires...');
                }

                $inscription = true;
                $rep = "index.php";
            }
        }
    } else {
        $rep = "Adresse mail non valide.";
    }
    echo json_encode(array("inscription" => $inscription, "reponse" => $rep));
    exit();
}