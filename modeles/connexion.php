<?php

require_once(dirname(__FILE__).'/pdo_mysql.php');

if (isset($_POST['email'], $_POST['motdepasse'])) {
    if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $rep = "";
        $email = filter_input(INPUT_POST, "email");
        $mdp = crypt(filter_input(INPUT_POST, "motdepasse"));

        $return = $db->prepare('"SELECT * FROM user WHERE email = :email AND motdepasse = :mdp');
        $return->execute(array('email' => $email, 'mdp' => $mdp));
        print_r($return); exit();
        if($return->fetchColumn() > 0)
        {
            $user = $return->fetch(PDO::FETCH_OBJ);
            
            $_SESSION['iduser'] = $user->iduser;
            $_SESSION['nom'] = $user->nom;
            $_SESSION['prenom'] = $user->prenom;

            $cnx = true;
            $rep = "index.php?page=mycubby";
        } else {
            $cnx = false;
            $rep = "Identifiant ou Mot de passe incorrect.";
        }
    } else {
        $cnx = false;
        $rep = "Adresse mail non valide.";
    }
    echo json_encode(array("connexion" => $cnx, "reponse" => $rep));
    exit();
}