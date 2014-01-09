<?php
session_start();
//include_once './modeles/pdo_mysql.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CubbyHole</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/font-awesome.min.css" rel="stylesheet">
        <link href="./css/main.css" rel="stylesheet">
    </head>
    <body>
        <?php
        if (array_key_exists('iduser', $_SESSION) && !empty($_SESSION['id'])) { //Si l'utilisateur est connecté
            include './vues/include/header.php';
            if (!empty($_GET['page']) && is_file($_GET['page'] . '.php')) { //Si la page existe
                include $_GET['page'] . '.php';
            } else {
                include './controleurs/accueil.php';
            }
        } else {
            include './controleurs/sign-in.php';
        }
        ?>
        <script src="./js/jquery.js"></script> 
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/form-sign-in.js"></script>
    </body>
</html>


