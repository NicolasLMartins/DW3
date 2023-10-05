<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Produtos extends BaseController
{
    public function index()
    {
        $titulo = "Meus Produtos";
        $data['titulo'] = $titulo;
        echo view('produtos/index', $data);
    }

    public function novo()
    {
        return "Novo produto";
    }
}
