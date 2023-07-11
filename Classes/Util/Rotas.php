<?php

namespace Util;

class Rotas
{

    /**
     * @return [type]
     */
    public static function getRotas()
    {
        $urls = self::getUrls();

        $request = [];
        $request['rota'] = strtoupper($urls[0]);
        $request['recurso'] = $urls[1] ?? null;
        $request['id'] = $urls[2] ?? null;
        $request['metodo'] = $_SERVER['REQUEST_METHOD'];

        //var_dump($request);

        return $request;
    }

    /**
     * @return [type]
     */
    public static function getUrls()
    {
        $uri = str_replace('/'. DIR_PROJECT,'', $_SERVER['REQUEST_URI']);
        return explode('/', trim($uri, '/'));
    }

}