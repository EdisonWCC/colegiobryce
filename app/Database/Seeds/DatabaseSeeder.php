<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Ejecutar seeders en orden
        $this->call('UsuariosSeeder');
        $this->call('EstudiantesSeeder');
        $this->call('ProfesoresSeeder');
        $this->call('CursosSeeder');
        $this->call('NotasSeeder');
    }
}
