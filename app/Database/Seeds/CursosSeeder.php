<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CursosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nombre' => 'Educación para el trabajo'],
            ['nombre' => 'Religión'],
            ['nombre' => 'Ciencia y Tecnología'],
            ['nombre' => 'Matemática'],
            ['nombre' => 'Inglés'],
            ['nombre' => 'Comunicación'],
            ['nombre' => 'Arte y Cultura'],
            ['nombre' => 'Educación Física'],
            ['nombre' => 'Ciencias Sociales'],
            ['nombre' => 'Desarrollo Personal, Ciudadanía y Cívica'],
        ];

        $this->db->table('cursos')->insertBatch($data);
    }
}
