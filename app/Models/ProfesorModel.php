<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfesorModel extends Model
{
    protected $table = 'profesores';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'usuario_id',
        'nombres',
        'apellidos',
        'especialidad'
    ];
}
