<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Test extends BaseController
{
    public function login_test()
    {
        $session = session();
        $lastError = $session->getFlashdata('error');
        $lastSuccess = $session->getFlashdata('success');

        return view('test/login_test', [
            'lastError' => $lastError,
            'lastSuccess' => $lastSuccess,
        ]);
    }

    public function validar_test()
    {
        $method = strtolower($this->request->getMethod());
        
        $result = [
            'method' => $method,
            'method_correct' => $method === 'post',
            'dni' => $this->request->getPost('dni'),
            'password' => $this->request->getPost('password'),
            'all_post' => $this->request->getPost(),
        ];

        $usuarioModel = new \App\Models\UsuarioModel();
        $usuario = $usuarioModel->where('dni', $this->request->getPost('dni'))->first();
        $result['usuario_encontrado'] = $usuario ? 'SÍ' : 'NO';
        $result['usuario_datos'] = $usuario;

        return $this->response->setJSON($result);
    }
}
