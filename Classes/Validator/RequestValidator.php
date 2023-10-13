<?php

namespace Validator;

use Generator;
use Util\ConstantesGenericasUtil;
use Util\JsonUtil;

class RequestValidator
{
    private $request;
    private $dadosRequest = [];

    const GET = 'GET';
    const DELETE = 'DELETE';


    public function __construct($request)
    {
        $this->request = $request;
    }


    /**
     *  function
     *
     * @return String
     */
    public function processarRequest()
    {
        $retorno = ConstantesGenericasUtil::MSG_ERRO_TIPO_ROTA;

        $this->request['metodo'] == 'POST';

        if(in_array($this->request['metodo'],ConstantesGenericasUtil::TIPO_REQUEST, true)){
            $retorno = $this->direcionarRequest();
        }
        

        return $retorno;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    private function direcionarRequest()
    {
        if ($this->request['metodo'] !== self::GET && $this->request['metodo'] !== self::DELETE){
            $this->dadosRequest = JsonUtil::tratarCorpoRequisicaoJson();
        }
    }

}