<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class padres extends Model
{
    use HasFactory;


    protected $table = 'padres';

    protected $fillable = [
        'user_id',
        'genero',
        'telefono',
        'direccion_actual',
       
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ninos()
    {
        return $this->hasMany(Ninos::class, 'padre_id');
    }
    

}
