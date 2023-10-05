<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Produtos extends BaseController
{
    public function index()
    {
        return "index Produtos";
    }

    public function novo()
    {
        return "Novo produto";
    }
}
