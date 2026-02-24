<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProfesorCurso extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'profesor_id' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'curso_id'   => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('id', false, true);
        $this->forge->addUniqueKey(['profesor_id', 'curso_id']);
        $this->forge->addForeignKey('profesor_id', 'profesores', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('curso_id', 'cursos', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('profesor_curso');
    }

    public function down()
    {
        $this->forge->dropTable('profesor_curso');
    }
}
