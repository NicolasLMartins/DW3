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
}
