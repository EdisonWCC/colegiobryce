<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateNotas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'estudiante_id'  => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'curso_id'       => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'trimestre'      => [
                'type'       => 'ENUM',
                'constraint' => ['1', '2', '3'],
            ],
            'estado'         => [
                'type'       => 'ENUM',
                'constraint' => ['Aprobado', 'Desaprobado'],
            ],
            'fecha_registro' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
        ]);
        $this->forge->addKey('id', false, true);
        $this->forge->addUniqueKey(['estudiante_id', 'curso_id', 'trimestre']);
        $this->forge->addForeignKey('estudiante_id', 'estudiantes', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('curso_id', 'cursos', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('notas');
    }

    public function down()
    {
        $this->forge->dropTable('notas');
    }
}
