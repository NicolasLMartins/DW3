<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nome' => 'Notebook',
            'descricao' => 'Intel i5 7th Gen 960MX Nvidia GeForce',
            'quantidade' => '5',
            'quantidade_minima' => '3',
            'valor_de_compra' => 2000.00,
            'valor_de_venda' => 2300.00,
            'margem_de_lucro' => 300.00,
            'validade' => '2030-10-11',
        ];

        $this->db->table('produtos')->insert($data);
    }
}
