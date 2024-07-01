<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreaTablaCategorias extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);

        //! Le decimos que la id sera nuestra llave primaria
        $this->forge->addKey('id', true);

        //? Y despues creamos la tabla
        $this->forge->createTable('categorias');



    }

    public function down()
    {
        // ! Borramos la tabla
        $this->forge->dropTable('categorias');
    }
}
