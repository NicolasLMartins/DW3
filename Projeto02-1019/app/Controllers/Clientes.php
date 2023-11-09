<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClienteModel;

class Clientes extends BaseController
{
    private $cliente_model;

    function __construct(){
        $this->cliente_model = new ClienteModel();
    }

    public function index()
    {
        $clientes = $this->cliente_model->findAll();;

        $data["clientes"] = $clientes;

        echo view('templates/header');
        echo view('clientes/index', $data);
        echo view('templates/footer');
    }
    
    public function novo()
    {
        echo view('templates/header');
        echo view('clientes/novo');
        echo view('templates/footer');
    }

    public function store()
    {
        $data = $this->request->getVar();

        // dd($data);

        $this->cliente_model->insert($data);
        return redirect()->to('clientes/novo');
    }
}
