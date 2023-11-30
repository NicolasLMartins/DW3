<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FuncionariosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nome' => 'Nícolas',
            'data_de_nascimento' => '2006-08-24',
            'rg' => '5125249754',
            'cpf' => '03569515028',
            'telefone' => '(51) 99853-5215',
            'endereco' => 'Av. São Borja, 909, 93040-588',
            'data_de_contratacao' => '2025-04-15',
            'cargo' => 'Estagiário',
            'salario' => 1300.00,
            'dia_de_pagamento' => 15,
        ];

        $this->db->table('funcionarios')->insert($data);
    }
}
