<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NotasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Notas estudiante 1 - Juan Pérez
            ['estudiante_id' => 1, 'curso_id' => 1, 'trimestre' => '1', 'estado' => 'Aprobado'],
            ['estudiante_id' => 1, 'curso_id' => 2, 'trimestre' => '1', 'estado' => 'Aprobado'],
            ['estudiante_id' => 1, 'curso_id' => 3, 'trimestre' => '1', 'estado' => 'Desaprobado'],
            ['estudiante_id' => 1, 'curso_id' => 4, 'trimestre' => '1', 'estado' => 'Aprobado'],
            ['estudiante_id' => 1, 'curso_id' => 5, 'trimestre' => '1', 'estado' => 'Aprobado'],
            
            ['estudiante_id' => 1, 'curso_id' => 1, 'trimestre' => '2', 'estado' => 'Aprobado'],
            ['estudiante_id' => 1, 'curso_id' => 2, 'trimestre' => '2', 'estado' => 'Aprobado'],
            ['estudiante_id' => 1, 'curso_id' => 3, 'trimestre' => '2', 'estado' => 'Aprobado'],
            ['estudiante_id' => 1, 'curso_id' => 4, 'trimestre' => '2', 'estado' => 'Desaprobado'],
            ['estudiante_id' => 1, 'curso_id' => 5, 'trimestre' => '2', 'estado' => 'Aprobado'],
            
            ['estudiante_id' => 1, 'curso_id' => 1, 'trimestre' => '3', 'estado' => 'Aprobado'],
            ['estudiante_id' => 1, 'curso_id' => 2, 'trimestre' => '3', 'estado' => 'Aprobado'],
            ['estudiante_id' => 1, 'curso_id' => 3, 'trimestre' => '3', 'estado' => 'Aprobado'],
            ['estudiante_id' => 1, 'curso_id' => 4, 'trimestre' => '3', 'estado' => 'Aprobado'],
            ['estudiante_id' => 1, 'curso_id' => 5, 'trimestre' => '3', 'estado' => 'Aprobado'],
            
            // Notas estudiante 2 - María González
            ['estudiante_id' => 2, 'curso_id' => 5, 'trimestre' => '1', 'estado' => 'Aprobado'],
            ['estudiante_id' => 2, 'curso_id' => 6, 'trimestre' => '1', 'estado' => 'Aprobado'],
            ['estudiante_id' => 2, 'curso_id' => 7, 'trimestre' => '1', 'estado' => 'Aprobado'],
            ['estudiante_id' => 2, 'curso_id' => 8, 'trimestre' => '1', 'estado' => 'Aprobado'],
            
            ['estudiante_id' => 2, 'curso_id' => 5, 'trimestre' => '2', 'estado' => 'Aprobado'],
            ['estudiante_id' => 2, 'curso_id' => 6, 'trimestre' => '2', 'estado' => 'Desaprobado'],
            ['estudiante_id' => 2, 'curso_id' => 7, 'trimestre' => '2', 'estado' => 'Aprobado'],
            ['estudiante_id' => 2, 'curso_id' => 8, 'trimestre' => '2', 'estado' => 'Aprobado'],
            
            ['estudiante_id' => 2, 'curso_id' => 5, 'trimestre' => '3', 'estado' => 'Aprobado'],
            ['estudiante_id' => 2, 'curso_id' => 6, 'trimestre' => '3', 'estado' => 'Aprobado'],
            ['estudiante_id' => 2, 'curso_id' => 7, 'trimestre' => '3', 'estado' => 'Aprobado'],
            ['estudiante_id' => 2, 'curso_id' => 8, 'trimestre' => '3', 'estado' => 'Aprobado'],
        ];

        $this->db->table('notas')->insertBatch($data);
    }
}
