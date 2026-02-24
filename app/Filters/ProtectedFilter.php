<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class ProtectedFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        $isLoggedIn = $session->get('isLoggedIn');
        $userRole = $session->get('rol');

        // Si no está autenticado, redirigir a login
        if (!$isLoggedIn) {
            session()->setFlashdata('error', 'Debes iniciar sesión para acceder a esta sección');
            return redirect()->to('/login');
        }

        // Verificar que el rol corresponda a la ruta
        $currentUri = $request->getUri()->getPath();

        if (strpos($currentUri, 'estudiante') !== false && $userRole !== 'estudiante') {
            session()->setFlashdata('error', 'Solo estudiantes pueden acceder a esta sección');
            return redirect()->to('/login');
        }

        if (strpos($currentUri, 'profesor') !== false && $userRole !== 'profesor') {
            session()->setFlashdata('error', 'Solo profesores pueden acceder a esta sección');
            return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
