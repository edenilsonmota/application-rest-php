<?php

//info errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);

define("HOST", 'localhost');
define("BANCO", 'apiREST');
define("USER", 'esm');
define("PASS", 'teste123');

define("DS", DIRECTORY_SEPARATOR); //separador de diretorio
define("DIR_APP", __DIR__); //raiz projeto
define("DIR_PROJECT", 'restPHP');

if(file_exists('autoload.php')){
    include 'autoload.php';
}else{
    echo "Erro ao incluir variaveis globais";exit;
}