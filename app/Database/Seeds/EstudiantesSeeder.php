<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EstudiantesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'usuario_id' => 1,
                'nombres'    => 'Juan',
                'apellidos'  => 'Pérez García',
                'grado'      => '4to Sec',
                'seccion'    => 'A'
            ],
            [
                'usuario_id' => 4,
                'nombres'    => 'María',
                'apellidos'  => 'González López',
                'grado'      => '5to Sec',
                'seccion'    => 'B'
            ],
        ];

        $this->db->table('estudiantes')->insertBatch($data);
    }
}
