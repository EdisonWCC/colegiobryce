<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        $isLoggedIn = $session->get('isLoggedIn');
        $userRole = $session->get('rol');
        $currentUri = $request->getUri()->getPath();

        // Si está autenticado y trata de acceder a /login, redirigir a su panel
        if ($isLoggedIn && $currentUri === 'login') {
            if ($userRole === 'estudiante') {
                return redirect()->to('/estudiante');
            } elseif ($userRole === 'profesor') {
                return redirect()->to('/profesor');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
