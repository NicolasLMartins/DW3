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
        $data = [
            'titulo' => 'Array de dias da semana:',
            'diasDaSemana' => [
                'segunda',
                'terça',
                'quarta',
                'quinta',
                'sexta',
                'sábado',
                'domingo'
            ],
        ];

        return view('myFunctionNlm', $data);
    }
}
