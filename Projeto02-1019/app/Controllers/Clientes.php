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
        if (isset($data['id_cliente'])):
            $this->cliente_model->where('id_cliente', $data['id_cliente'])->set($data)->update();

            return redirect()->to("/clientes/editar/{$data['id_cliente']}");
        endif;

        $this->cliente_model->insert($data);

        $session = session();
        $session->setFlashdata("alert", "success_create");
        
        return redirect()->to('/clientes');
    }

    public function editar($id_cliente)
    {
        // echo $id_cliente;
        $cliente = $this->cliente_model->where('id_cliente', $id_cliente)->first();

        $data['cliente'] = $cliente;

        echo view('templates/header');
        echo view('clientes/editar', $data);
        echo view('templates/footer');
    }

    public function excluir()
    {
        $id_cliente = $this->request->getVar('id_cliente');
        $this->cliente_model->where('id_cliente', $id_cliente)->delete();

        $session = session();
        $session->setFlashdata("alert", "success_delete");

        return redirect()->to('/clientes');
    }

    public function exibir($id_cliente)
    {
        $cliente = $this->cliente_model->where('id_cliente', $id_cliente)->first();

        $data['cliente'] = $cliente;

        echo view('templates/header');
        echo view('clientes/exibir', $data);
        echo view('templates/footer');
    }
}
