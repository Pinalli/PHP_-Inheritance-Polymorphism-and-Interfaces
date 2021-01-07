<?php

spl_autoload_register(function (string $nomeCompletoDaClasse){
    $pathFile = str_replace('Pinalli\\Banco', 'src',$nomeCompletoDaClasse );
    $pathFile = str_replace('\\', DIRECTORY_SEPARATOR, $pathFile);
    $pathFile .= '.php';

    if(file_exists($pathFile)) {
        require_once $pathFile;
    }
});