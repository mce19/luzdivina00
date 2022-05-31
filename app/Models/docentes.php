<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//spatie
use  Spatie\Permission\Traits\HasRoles;

class docentes extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

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
