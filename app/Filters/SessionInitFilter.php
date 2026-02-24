<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * SessionInitFilter
 * 
 * NOTA: Este filtro NO se usa actualmente porque CodeIgniter maneja
 * las sesiones internamente. Intentar llamar a session_start() manualmente
 * causa conflicto: "ini_set(): Session ini settings cannot be changed when a session is active"
 * 
 * CodeIgniter inicia automáticamente la sesión cuando se accede a ella.
 */
class SessionInitFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // No hacer nada - dejar que CodeIgniter maneje las sesiones
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}

