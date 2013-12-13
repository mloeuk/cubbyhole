<?php
/* Rajouter aux pages PHP: require_once('pdo_mysql.php'); */

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'test';

try {
    $db = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
} catch (PDOException $e) {
    print "ERREUR : " . $e->getMessage() . "<br/>";
    die();
}

/* Fermeture d'une connexion

  $db = null;

 */
?>
