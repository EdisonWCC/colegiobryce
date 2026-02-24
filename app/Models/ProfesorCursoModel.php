<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfesorCursoModel extends Model
{
    protected $table = 'profesor_curso';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'profesor_id',
        'curso_id'
    ];
}
