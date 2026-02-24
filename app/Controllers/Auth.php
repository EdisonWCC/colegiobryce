<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EstudianteModel;
use App\Models\NotaModel;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    /**
     * Mostrar formulario de login
     */
    public function login()
    {
        return view('auth/login');
    }

    /**
     * Validar credenciales del usuario
     */
    public function validar()
    {
        if ($this->request->getMethod() !== 'POST') {
            session()->setFlashdata('error', 'Método no permitido');
            return redirect()->to('/login');
        }

        $usuarioModel = new UsuarioModel();

        $dni = $this->request->getPost('dni');
        $password = $this->request->getPost('password');

        if (!$dni || !$password) {
            session()->setFlashdata('error', 'DNI y contraseña son requeridos');
            return redirect()->to('/login');
        }

        // Buscar usuario por DNI
        $usuario = $usuarioModel->where('dni', $dni)->first();

        if (!$usuario) {
            session()->setFlashdata('error', 'DNI no encontrado en el sistema');
            return redirect()->to('/login');
        }

        // Validar contraseña
        if ($usuario['password'] !== $password) {
            session()->setFlashdata('error', 'Contraseña incorrecta');
            return redirect()->to('/login');
        }

        // Setear sesión con datos del usuario
        session()->set([
            'id' => $usuario['id'],
            'dni' => $usuario['dni'],
            'rol' => $usuario['rol'],
            'isLoggedIn' => true
        ]);

        // Redirigir según rol
        if ($usuario['rol'] === 'estudiante') {
            return redirect()->to('/estudiante')->with('success', 'Bienvenido estudiante');
        } elseif ($usuario['rol'] === 'profesor') {
            return redirect()->to('/profesor')->with('success', 'Bienvenido profesor');
        } else {
            session()->setFlashdata('error', 'Rol no reconocido');
            return redirect()->to('/login');
        }
    }

    /**
     * Cerrar sesión
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/')->with('success', 'Sesión cerrada correctamente');
    }

    /**
     * Ver notas del estudiante autenticado
     */
    public function index()
    {
        $usuarioId = session()->get('id');
        
        $estudianteModel = new EstudianteModel();
        $notaModel = new NotaModel();

        $estudiante = $estudianteModel
            ->where('usuario_id', $usuarioId)
            ->first();

        // Verificar que el estudiante exista
        if (!$estudiante) {
            session()->setFlashdata('error', 'No se encontraron datos del estudiante');
            return redirect()->to('/login');
        }

        $notas = $notaModel
            ->select('notas.*, cursos.nombre as curso')
            ->join('cursos', 'cursos.id = notas.curso_id')
            ->where('estudiante_id', $estudiante['id'])
            ->findAll();

        return view('estudiante/notas', [
            'estudiante' => $estudiante,
            'notas' => $notas
        ]);
    }
}
