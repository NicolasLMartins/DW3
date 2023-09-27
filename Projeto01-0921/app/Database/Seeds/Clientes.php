<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Clientes extends Seeder
{
    public function run()
    {
        $this->db->table('clientes')->insert([

            'nome' => 'Nícolas',
            'data_de_nascimento' => '24/08/2006',
            'CPF' => '03569515028',
            'telefone' => '0800',
            'endereco' => 'PQP',
            'limite_de_credito' => '5000.00',
            'dia_de_pagamento' => '',
        ]);
    }
}