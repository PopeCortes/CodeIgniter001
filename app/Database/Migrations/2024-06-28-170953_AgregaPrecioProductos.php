<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregaPrecioProductos extends Migration
{
    public function up()
    {
        $campos = [
            'precio' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'after' => 'nombre',
                'null' => false
            ]
        ];

        $this->forge->addColumn('producto', $campos);
    }

    public function down()
    {
        // $this->forge->dropColumn('producto', 'precio');
    }
}
