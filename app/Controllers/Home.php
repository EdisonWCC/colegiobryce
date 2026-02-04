<?php

namespace App\Controllers;
use CodeIgniter\Email\Email;

class Home extends BaseController
{
        public function index()
    {
        $data = [
            'title' => 'Inicio - Colegio Preuniversitario Bryce'
        ];
        return view('home', $data);
    }

    public function nosotros()
    {
        $data = [
            'title' => 'Nosotros - Colegio Preuniversitario Bryce'
        ];
        return view('nosotros', $data);
    }

    public function programas()
    {
        $data = [
            'title' => 'Programas - Colegio Preuniversitario Bryce'
        ];
        return view('programas', $data);
    }

    public function admission()
    {
        $data = [
            'title' => 'Admisión - Colegio Preuniversitario Bryce'
        ];
        return view('admission', $data);
    }

    /**
     * Procesar formulario de admisión
     */
    public function admissionSubmit()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('admission');
        }

        // Validar datos
        if (!$this->validate([
            'firstname' => 'required|min_length[2]',
            'lastname' => 'required|min_length[2]',
            'email' => 'required|valid_email',
            'phone' => 'required',
            'birthdate' => 'required|valid_date',
            'program' => 'required',
            'school' => 'required',
            'grade' => 'required',
            'agree' => 'required'
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'firstname' => $this->request->getPost('firstname'),
            'lastname' => $this->request->getPost('lastname'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'birthdate' => $this->request->getPost('birthdate'),
            'program' => $this->request->getPost('program'),
            'school' => $this->request->getPost('school'),
            'grade' => $this->request->getPost('grade'),
            'message' => $this->request->getPost('message'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        // TODO: Guardar en base de datos o enviar email

        return redirect()->to('admission')->with('success', 'Solicitud enviada correctamente.');
    }

    public function contacto()
    {
        $data = [
            'title' => 'Contacto - Colegio Preuniversitario Bryce'
        ];
        return view('contacto', $data);
    }

    /**
     * Procesar formulario de contacto
     */
    public function contactoSend()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('contacto');
        }

        // Validar datos
        if (!$this->validate([
            'name' => 'required|min_length[2]',
            'email' => 'required|valid_email',
            'subject' => 'required|min_length[3]',
            'message' => 'required|min_length[10]'
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        // TODO: Guardar en base de datos o enviar email

        return redirect()->to('contacto')->with('success', 'Mensaje enviado correctamente.');
    }
}
