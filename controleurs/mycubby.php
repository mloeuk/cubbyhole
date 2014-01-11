<?php

include(dirname(__FILE__).'/../modeles/mycubby.php');

$path = getPath();

$list = getListContentsOfDirectory();

include(dirname(__FILE__).'/../vues/mycubby.php');

?>

