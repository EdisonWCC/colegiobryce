<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCursos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'     => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
        ]);
        $this->forge->addKey('id', false, true);
        $this->forge->createTable('cursos');
    }

    public function down()
    {
        $this->forge->dropTable('cursos');
    }
}
