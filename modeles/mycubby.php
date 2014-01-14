<?php

function getPath() {
    //return $_SERVER["DOCUMENT_ROOT"] . "cubbyhole/users/" . $_SESSION["id_user"];
    return dirname(__FILE__);
}

//Retourne le contenu du dossier
function getListContentsOfDirectory() {
    $path_directory = getPath();

    $list = array_diff(scandir($path_directory), array('..', '.')); //Liste le contenu du dossier et ne liste pas '..', '.'

    return $list;
}

function getMyDate($timestamp, $format = "d/m/Y") {
    return date($format, $timestamp);
}

//Retourne la taille d'un fichier
function getFilesize($file, $digits = 2) {
    if (is_file($file)) {
        $filePath = $file;
        if (!realpath($filePath)) {
            $filePath = $_SERVER["DOCUMENT_ROOT"] . $filePath;
        }
        $fileSize = filesize($filePath);
        $sizes = array("TB", "GB", "MB", "KB", "B");
        $total = count($sizes);
        while ($total-- && $fileSize > 1024) {
            $fileSize /= 1024;
        }
        return round($fileSize, $digits) . " " . $sizes[$total];
    }
    return false;
}

//Retourne toutes les informations des fichiers
function getInfoListContentsOfDirectory() {
    $path_directory = getPath();
    $info_list = array();

    if (is_dir($path_directory)) {
        $directory = opendir($path_directory);
        while (false !== ($file = readdir($directory))) {
            if ($file != '.' && $file != '..' && $file != 'index.php') {
                $info_list[] = array(
                    "type" => (is_dir($path_directory . '/' . $file) ? "folder" : "file"),
                    "filename" => $file,
                    "size" => getFilesize($path_directory . '/' . $file),
                    "last_update" => getMyDate(filemtime($path_directory . '/' . $file))
                );
            }
        }
    }
    return $info_list;
}