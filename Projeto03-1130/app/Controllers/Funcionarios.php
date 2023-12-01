<?php

namespace App\Controllers;

use App\Models\FuncionarioModel;
use App\Controllers\BaseController;

class Funcionarios extends BaseController
{
    private $funcionario_model;
    function __construct()
    {
        $this->funcionario_model = new FuncionarioModel();
    }

    public function index()
    {
        $data['funcionarios'] = $this->funcionario_model->findAll();

        return view('funcionarios/index', $data);
    }

    public function novo()
    {
        return view('funcionarios/novo');
    }

    public function store()
    {
        $data = $this->request->getVar();

        // dd($data);
        if (isset($data['id_funcionario'])) :
            $this->funcionario_model->where('id_funcionario', $data['id_funcionario'])->set($data)->update();

            $session = session();
            $session->setFlashdata("alert", "success_update");

            return redirect()->to("/funcionarios/form/{$data['id_funcionario']}");
        endif;

        $this->funcionario_model->insert($data);

        $session = session();
        $session->setFlashdata("alert", "success_create");

        return redirect()->to('/funcionarios');
    }

    public function editar($id_funcionario)
    {
        $data['funcionario'] = $this->funcionario_model

            ->where('id_funcionario', $id_funcionario)
            ->first();

        return view('funcionarios/form', $data);
    }

    public function excluir()
    {
        $id_funcionario = $this->request->getVar('id_funcionario');

        $this->funcionario_model
            ->where('id_funcionario', $id_funcionario)
            ->delete();
        $session = session();
        $session->setFlashdata('alert', 'success_delete');
        return redirect()->to('/funcionarios');
    }
}
