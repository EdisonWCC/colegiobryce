<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfesorModel;
use App\Models\NotaModel;
use App\Models\ProfesorCursoModel;
use App\Models\EstudianteModel;
use App\Models\CursoModel;
use CodeIgniter\HTTP\ResponseInterface;

class Profesor extends BaseController
{
    public function index()
    {
        $estudianteModel = new EstudianteModel();
        $cursoModel = new CursoModel();

        $data = [
            'estudiantes' => $estudianteModel->findAll(),
            'cursos' => $cursoModel->findAll()
        ];

        return view('profesor/dashboard', $data);
    }

    public function guardarNota()
    {
        $notaModel = new NotaModel();

        $notaModel->save([
            'estudiante_id' => $this->request->getPost('estudiante_id'),
            'curso_id' => $this->request->getPost('curso_id'),
            'trimestre' => $this->request->getPost('trimestre'),
            'estado' => $this->request->getPost('estado')
        ]);

        session()->setFlashdata('success', 'Nota registrada correctamente');
        return redirect()->back();
    }
}
