<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grupos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'slug',
        'tema_id',
        'docente_id',
        'description'
    ];

    public function docentes()
    {
        return $this->belongsTo(Doncentes::class);
    }
}
