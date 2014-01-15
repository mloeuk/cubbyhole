<?php
$iduser = $_SESSION['iduser'];

include(dirname(__FILE__).'/../modeles/mycubby.php');

$path = getPathUser();

$list = getInfoListContentsOfDirectory();

include(dirname(__FILE__).'/../vues/mycubby.php');

?>

