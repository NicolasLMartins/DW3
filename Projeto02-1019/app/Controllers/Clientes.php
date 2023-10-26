<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClienteModel;

class Clientes extends BaseController
{
    public function novo()
    {
        echo view('templates/header');
        echo view('clientes/novo');
        echo view('templates/footer');
    }
}
