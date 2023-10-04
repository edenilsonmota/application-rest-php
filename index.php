<?php

use Util\Rotas;
use Validator\RequestValidator;  //Namespace

include 'global.php';


try {
    $RequestValidator = new RequestValidator(Rotas::getRotas());
    $retorno = $RequestValidator->processarRequest();
} catch (Exception $err) {
    echo $err->getMessage();
}
