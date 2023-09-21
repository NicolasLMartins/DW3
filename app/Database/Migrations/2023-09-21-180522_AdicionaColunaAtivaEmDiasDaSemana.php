<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdicionaColunaAtivaEmDiasDaSemana extends Migration
{
    public function up()
    {
        $this->forge->addColumn('diasDaSemana', [

            'ativa' => [
                'type' => 'BOOLEAN',
                'null' => false,
                'default' => false,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('diasDaSemana', 'ativa');
    }
}
