<?php

use Util\Rotas;
use Validator\RequestValidator;  //namespace

include 'global.php';


try {
    $RequestValidator = new RequestValidator(Rotas::getRotas());
    $retorno = $RequestValidator->processarRequest();
} catch (Exception $err) {
    echo $err->getMessage();
}
