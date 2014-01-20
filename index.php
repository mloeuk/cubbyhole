<?php
session_start();
require_once(dirname(__FILE__) . '/modeles/pdo_mysql.php');
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
        if (array_key_exists('iduser', $_SESSION) && !empty($_SESSION['iduser'])) { //Si l'utilisateur est connecté
            include './vues/include/header.php';
            if (!empty($_GET['page']) && is_file("./controleurs/" . $_GET['page'] . '.php')) { //Si la page existe
                include "./controleurs/" . $_GET['page'] . '.php';
            } elseif(!empty($_GET['page']) && !is_file("./controleurs/" . $_GET['page'] . '.php')) { //Si la page n'existe pas
                include './vues/error404.php';
            } elseif(empty($_GET['page'])) { //Si $_GET['page'] vide alors mycubby.php (Par défault)
                include './controleurs/mycubby.php';
            }
        } else { //Si l'utilisateur n'est pas connecté
            include './controleurs/sign-in.php';
        }
        ?>
        <script src="./js/jquery.js"></script> 
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/myfunction.js"></script>
        <script src="./js/form-sign-in.js"></script>
        <script src="./js/mycubby.js"></script>
    </body>
</html>