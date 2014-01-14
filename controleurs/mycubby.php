<?php

include(dirname(__FILE__).'/../modeles/mycubby.php');

$path = getPath();

$list = getInfoListContentsOfDirectory();

include(dirname(__FILE__).'/../vues/mycubby.php');

?>

