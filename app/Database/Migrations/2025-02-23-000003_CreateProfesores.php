<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProfesores extends Migration
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
            'especialidad' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id', false, true);
        $this->forge->addForeignKey('usuario_id', 'usuarios', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('profesores');
    }

    public function down()
    {
        $this->forge->dropTable('profesores');
    }
}
