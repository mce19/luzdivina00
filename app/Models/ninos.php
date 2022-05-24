<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ninos extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'padre_id',
        'clase_id',
        'genero',
        'telefono',
        'fecha_de_nacimiento',
        'direccion_actual',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);

    }


    public function padres()
    {
        return $this->belongsTo(Padres::class);
    }

    public function clase()
    {
        return $this->belongsTo(Niveles::class, 'clase_id');
    }

    public function asistencia()
    {
        return $this->belongsTo(Asistencia::class);
    }
   


}
