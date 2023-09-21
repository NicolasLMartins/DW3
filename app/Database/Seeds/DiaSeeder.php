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
                'dia' => 'Segunda',
                'descricao' => 'Descrição da atividade do dia.',
            ],
            [
                'dia' => 'Terça',
                'descricao' => 'Descrição da atividade do dia.',
            ],
            [
                'dia' => 'Quarta',
                'descricao' => 'Descrição da atividade do dia.',
            ],
            [
                'dia' => 'Quinta',
                'descricao' => 'Descrição da atividade do dia.',
            ],
            [
                'dia' => 'Sexta',
                'descricao' => 'Descrição da atividade do dia.',
            ],
            [
                'dia' => 'Sábado',
                'descricao' => 'Descrição da atividade do dia.',
            ],
            [
                'dia' => 'Domingo',
                'descricao' => 'Descrição da atividade do dia.',
            ],
        ];

        // dd($diasDaSemana);

        foreach ($diasDaSemana as $dia) {
            $diaModel->insert($dia);
        }

        echo 'Dias da semana inseridos com sucesso!';
    }
}
