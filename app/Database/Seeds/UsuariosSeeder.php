<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'dni'      => '12345678',
                'password' => '12345678',
                'rol'      => 'estudiante'
            ],
            [
                'dni'      => '87654321',
                'password' => '87654321',
                'rol'      => 'profesor'
            ],
            [
                'dni'      => '00000000',
                'password' => 'admin123',
                'rol'      => 'admin'
            ],
            [
                'dni'      => '11111111',
                'password' => 'pass1234',
                'rol'      => 'estudiante'
            ],
            [
                'dni'      => '22222222',
                'password' => 'pass1234',
                'rol'      => 'profesor'
            ],
        ];

        $this->db->table('usuarios')->insertBatch($data);
    }
}
