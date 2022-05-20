<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docentes extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'genero',
        'telefono',
        'fecha_de_nacimiento',
        'direccion_actual',
    ] ;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function grupos()
    {
        return $this->belongsTo(Grupos::class);
    }

    public function ninos()
    {
        return $this->belongsTo(Ninos::class);
    }


}
