<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Produtos extends BaseController
{
    public function index()
    {
        $titulo = "Meus Produtos";

        $produtos = [
            [
                'nome' => "Notebook",
                'descricao' => "Produto Usado",
                'valor_de_compra' => 899.99,
                'valor_de_venda' => 1399.9,
                'quantidade' => 11,
                'validade' => ""
            ],
            [
                'nome' => "Computador I5",
                'descricao' => "Produto Novo",
                'valor_de_compra' => 1899.99,
                'valor_de_venda' => 2399.9,
                'quantidade' => 1,
                'validade' => ""
            ]
        ];

        $data['titulo'] = $titulo;
        $data['produtos'] = $produtos;

        echo View('produtos/index', $data);
    }

    public function novo()
    {
        return "Novo produto";
    }

    public function model()
    {
        // $produto_model = new ProdutoModel();
        // $produtos = $produto_model->findAll();
        // // dd($produtos);
        // $produto_model->where('id_produto', 1)->first();
        // dd($produtos);
        // // dd();
    }
}
