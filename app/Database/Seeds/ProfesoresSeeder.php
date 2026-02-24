<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProfesoresSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'usuario_id'  => 2,
                'nombres'     => 'Pedro',
                'apellidos'   => 'López García',
                'especialidad' => 'Matemática'
            ],
            [
                'usuario_id'  => 5,
                'nombres'     => 'Laura',
                'apellidos'   => 'Sánchez Ruiz',
                'especialidad' => 'Comunicación'
            ],
        ];

        $this->db->table('profesores')->insertBatch($data);
    }
}
