<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Models\ProdutoModel;

class Produtos extends BaseController
{
    private $produto_model;
    function __construct()
    {
        $this->produto_model = new ProdutoModel();
    }

    public function index()
    {
        $data['produtos'] = $this->produto_model->findAll();

        return view('produtos/index', $data);
    }

    public function novo()
    {
        return view('/produtos/form');
    }

    public function store()
    {
        $data = $this->request->getVar();

        // dd($data);
        if (isset($data['id_produto'])) :
            $this->produto_model->where('id_produto', $data['id_produto'])->set($data)->update();

            $session = session();
            $session->setFlashdata("alert", "success_update");

            return redirect()->to("/produtos/editar/{$data['id_produto']}");
        endif;

        $this->produto_model->insert($data);

        $session = session();
        $session->setFlashdata("alert", "success_create");

        return redirect()->to('/produtos');
    }

    public function editar($id_produto)
    {
        $data['produto'] = $this->produto_model

            ->where('id_produto', $id_produto)
            ->first();

        return view('produtos/form', $data);
    }

    public function excluir()
    {
        $id_produto = $this->request->getVar('id_produto');

        $this->produto_model
            ->where('id_produto', $id_produto)
            ->delete();
        $session = session();
        $session->setFlashdata('alert', 'success_delete');
        return redirect()->to('/produtos');
    }
    
    public function exibir($id_produto)
    {
        $produto = $this->produto_model->where('id_produto', $id_produto)->first();

        $data['produto'] = $produto;

        return view('produtos/exibir', $data);
    }
}
