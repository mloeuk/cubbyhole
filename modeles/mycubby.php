<?php

function getPath() {
    return dirname(__FILE__);
}

function getListContentsOfDirectory() {
    $path_directory = getPath();

    $list = array_diff(scandir($path_directory), array('..', '.')); //Liste le contenu du dossier et ne liste pas '..', '.'
    
    return $list;
}

function getInfoListContentsOfDirectory() {
    $path_directory = getPath();
    $info_list = array();
    
    if($directory = opendir($path_directory))
    {
        while(false !== ($file = readdir($directory)))
        {
            if($file != '.' && $file != '..' && $file != 'index.php')
            {
                $info_list[] = stat($file);
                $info_list[]['filename'] = $file;
            }
        }
    }
    return $info_list;
}