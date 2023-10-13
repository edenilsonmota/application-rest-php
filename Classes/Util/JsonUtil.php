<?

namespace Util;

use InvalidArgumentException;
use JsonException as JsonExceptionAlias;

/**
 * Classe que tratará dados no formato de JSON
 */
class JsonUtil
{
    /**
     * 
     *
     * @return void
     */
    public static function tratarCorpoRequisicaoJson()
    {
        try{
            $postJson = json_decode(file_get_contents('php://input'), true);
        }catch(JsonExceptionAlias $exception){
            throw new InvalidArgumentException(ConstantesGenericasUtil::MSG_ERRO_JSON_VAZIO);
        }

        if(is_array($postJson) && count($postJson) > 0){
            return $postJson;
        }

    }

}