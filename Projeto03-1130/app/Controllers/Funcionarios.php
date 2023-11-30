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
        $dados = $this->request->getVar();

        $this->funcionario_model->insert($dados);

        $session = session();
        $session->setFlashdata('alert', 'success_create');

        return redirect()->to('/funcionarios');
    }

    public function editar($id_funcionario)
    {
        $data['funcionario'] = $this->funcionario_model

        ->where('id_funcionario', $id_funcionario)
        ->first();

        return view('funcionarios/editar');
    }
}
