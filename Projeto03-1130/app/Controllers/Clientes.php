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

        return view('clientes/index', $data);
    }
    
    public function novo()
    {
        return view('clientes/novo');
    }

    public function store()
    {
        $data = $this->request->getVar();

        // dd($data);
        if (isset($data['id_cliente'])):
            $this->cliente_model->where('id_cliente', $data['id_cliente'])->set($data)->update();

            $session = session();
            $session->setFlashdata("alert", "success_update");
            
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

        return view('clientes/editar', $data);
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

        return view('clientes/exibir', $data);
    }
}
