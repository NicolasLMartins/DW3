<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DiaSeeder extends Seeder
{
    public function run()
    {
        $diaModel = new \App\Models\DiaModel();

        $diasDaSemana = [
            [
                'dia' => 'Segunda'
            ],
            [
                'dia' => 'Terça'
            ],
            [
                'dia' => 'Quarta'
            ],
            [
                'dia' => 'Quinta'
            ],
            [
                'dia' => 'Sexta'
            ],
            [
                'dia' => 'Sábado'
            ],
            [
                'dia' => 'Domingo'
            ],
        ];

        // dd($diasDaSemana);

        foreach ($diasDaSemana as $dia) {
            $diaModel->insert($dia);
        }

        echo 'Dias da semana inseridos com sucesso!';
    }
}
