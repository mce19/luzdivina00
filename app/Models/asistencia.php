<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asistencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'grupo_id',
        'docente_id',
        'nino_id',
        'fecha_de_asistencia',
        'estado_de_asistencia'
    ];

    public function docentes()
    {
        return $this->belongsTo(Docentes::class);
    }

    public function ninos()
    {
        return $this->belongsTo(Ninos::class);
    }

}
