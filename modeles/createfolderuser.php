<?php

if (isset($_POST['path'])) {
    $path = filter_input(INPUT_POST, "path");

    if (!mkdir($path, 0777, true)) {
        echo json_encode(array("mkdir" => false, "reponse" => "Echec lors de la création des répertoires..."));
    } else {
        echo json_encode(array("mkdir" => true));
    }
}

?>