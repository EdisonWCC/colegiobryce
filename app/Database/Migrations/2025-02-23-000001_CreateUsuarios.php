<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'dni'      => [
                'type'       => 'VARCHAR',
                'constraint' => '8',
                'unique'     => true,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'rol'      => [
                'type'       => 'ENUM',
                'constraint' => ['estudiante', 'profesor', 'admin'],
            ],
        ]);
        $this->forge->addKey('id', false, true);
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
