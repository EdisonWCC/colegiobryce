<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEstudiantes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'usuario_id' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'nombres'    => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'apellidos'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'grado'      => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'seccion'    => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
        ]);
        $this->forge->addKey('id', false, true);
        $this->forge->addForeignKey('usuario_id', 'usuarios', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('estudiantes');
    }

    public function down()
    {
        $this->forge->dropTable('estudiantes');
    }
}
