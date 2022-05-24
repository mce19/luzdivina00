<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nivel extends Model
{
    use HasFactory;

    protected $fillable = [
        'clase_nombre',
        'clase_numerico',
        'docente_id',
        'clase_descripcion'
    ];

    public function ninos()
    {
        return $this->hasMany(Student::class,'clase_id');
    }

    public function grupos()
    {
        return $this->belongsToMany(Grupos::class);
    }

    public function docentes() 
    {
        return $this->belongsTo(Doncentes::class);
    }


}
