<?php

namespace App\Http\Controllers;

class Test extends Controller
{
    public function test()
    {
        return $this->response->errorForbidden();
    }
}
