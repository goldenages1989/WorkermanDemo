<?php

namespace App\Controller;

use App\Database\DB;
use Mix\Vega\Context;

class Users
{

    public function index(Context $ctx)
    {
        $row = DB::instance()->table('users')->where('id = ?', $ctx->param('id'))->first();
        if (!$row) {
            throw new \Exception('User not found');
        }
        $ctx->JSON(200, [
            'code' => 0,
            'message' => 'ok',
            'data' => $row
        ]);
    }

}
