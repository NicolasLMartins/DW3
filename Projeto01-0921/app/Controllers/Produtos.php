<?php

namespace App\Controllers;

use App\Models\ProdutoModel;
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
                'validade' => "",
            ],
            [
                'nome' => "Computador I5",
                'descricao' => "Produto Novo",
                'valor_de_compra' => 1899.99,
                'valor_de_venda' => 2399.9,
                'quantidade' => 1,
                'validade' => "",
            ],
        ];

        $data['titulo'] = $titulo;
        $data['produtos'] = $produtos;

        echo view('produtos/index', $data);
    }

    public function novo()
    {
        return "Novo produto";
    }

    public function model()
    {
        $produto_model = new ProdutoModel();

        // $produtos = $produto_model->findAll();

        // dd($produtos);

        // $produtos =  $produto_model->where('id_produto', 1)->first();

        // dd($produtos);

        // $produto_model->insert([
        //     'nome' => "Produto Teste",
        //     'descricao' => "Produto Novo",
        //     'valor_de_compra' => 199,
        //     'valor_de_venda' => 300,
        //     'quantidade' => 10,
        //     'validade' => "",
        // ]);

        // dd();

        // $dados = [
        //     'nome' => "Produto Motorola",
        //     'descricao' => "Produto Usado",
        //     'valor_de_compra' => 1990,
        //     'valor_de_venda' => 3000,
        //     'quantidade' => 12,
        //     'validade' => ""
        // ];
        // $produto_model
        //     ->where('id_produto', 4)
        //     ->set($dados)
        //     ->update();
        // dd();

        $produto_model
            ->where('id_produto', 4)
            ->delete();
        dd();

        // dd();
    }
}