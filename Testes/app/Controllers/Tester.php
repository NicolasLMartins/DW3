<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Tester extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Enviando dados do controller para a view.'
        ];

        return view('tester', $data);
    }

    public function myFunctionNlm()
    {
        $diaModel = new \App\Models\DiaModel();

        $data = [
            'titulo' => 'Array de dias da semana:',
            // 'diasDaSemana' => [
            //     'segunda',
            //     'terça',
            //     'quarta',
            //     'quinta',
            //     'sexta',
            //     'sábado',
            //     'domingo'
            // ],
            'diasDaSemana' => $diaModel->findAll(),
            // 'diasDaSemana' => $diaModel->findAll(2),
            // 'diasDaSemana' => $diaModel->where('ativa', true)->findAll(),
        ];

        return view('myFunctionNlm', $data);
    }
}
