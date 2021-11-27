<?php

namespace App\Router;

use App\Controller\Users;
use Mix\Vega\Engine;

class Vega
{

    /**
     * @return Engine
     */
    public static function new()
    {
        $vega = new Engine();

        $vega->handle('/users/{id}', [new Users(), 'index'])->methods('GET');
        $vega->handle('/employees/{id}', [new Users(), 'index'])->methods('GET');

        return $vega;
    }

}
