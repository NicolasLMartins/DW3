<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClienteModel;

class Clientes extends BaseController
{
    public function index()
    {
        $cliente_model = new ClienteModel();
        $clientes = $cliente_model->findAll();
        echo View('clientes/index');
        $data['clientes'] = $clientes;
        echo View('clientes/index', $data);
    }
}
