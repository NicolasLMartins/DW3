<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClientesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nome' => 'Nícolas',
            'data_de_nascimento' => '2006-08-24',
            'telefone' => '(51)99853-5215',
            'endereco' => 'Av. São Borja, 909, 93040-588',
            'limite_de_credito' => 27000.59,
        ];

        $this->db->table('clientes')->insert($data);
    }
}
