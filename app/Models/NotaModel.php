<?php

namespace App\Models;

use CodeIgniter\Model;

class NotaModel extends Model
{
    protected $table = 'notas';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'estudiante_id',
        'curso_id',
        'trimestre',
        'estado'
    ];
}
