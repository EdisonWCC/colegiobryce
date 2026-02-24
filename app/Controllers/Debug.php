<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Debug extends BaseController
{
    public function index()
    {
        // Obtener datos de sesión
        $session = session();
        $isLoggedIn = $session->get('isLoggedIn');
        $userId = $session->get('id');
        $userRole = $session->get('rol');
        $userDni = $session->get('dni');

        // Obtener datos de la base de datos
        $db = \Config\Database::connect();
        $dbStatus = false;
        $dbMessage = '';

        try {
            $db->query('SELECT 1');
            $dbStatus = true;
            $dbMessage = '✓ Conexión exitosa';
        } catch (\Exception $e) {
            $dbStatus = false;
            $dbMessage = '✗ Error de conexión: ' . $e->getMessage();
        }

        // Cargar datos de las tablas
        $usuarios = [];
        $estudiantes = [];
        $cursos = [];
        $notas = [];
        $profesores = [];

        try {
            $usuarios = $db->table('usuarios')->get()->getResultArray();
        } catch (\Exception $e) {}

        try {
            $estudiantes = $db->table('estudiantes')->get()->getResultArray();
        } catch (\Exception $e) {}

        try {
            $cursos = $db->table('cursos')->get()->getResultArray();
        } catch (\Exception $e) {}

        try {
            $profesores = $db->table('profesores')->get()->getResultArray();
        } catch (\Exception $e) {}

        try {
            $notas = $db->table('notas')
                ->select('notas.*, estudiantes.nombres, estudiantes.apellidos, cursos.nombre as curso')
                ->join('estudiantes', 'estudiantes.id = notas.estudiante_id')
                ->join('cursos', 'cursos.id = notas.curso_id')
                ->get()
                ->getResultArray();
        } catch (\Exception $e) {}

        $dbHost = config('Database')->default['hostname'];
        $dbName = config('Database')->default['database'];
        $dbUser = config('Database')->default['username'];

        return view('debug/index', [
            'isLoggedIn' => $isLoggedIn,
            'userId' => $userId,
            'userRole' => $userRole,
            'userDni' => $userDni,
            'dbStatus' => $dbStatus,
            'dbMessage' => $dbMessage,
            'dbHost' => $dbHost,
            'dbName' => $dbName,
            'dbUser' => $dbUser,
            'usuarios' => $usuarios,
            'estudiantes' => $estudiantes,
            'cursos' => $cursos,
            'profesores' => $profesores,
            'notas' => $notas,
        ]);
    }
}
