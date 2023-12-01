<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MainSeeder extends Seeder
{
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
            $this->call('ClientesSeeder');
            $this->call('FuncionariosSeeder');
            $this->call('ProdutosSeeder');
        }
    }
}
