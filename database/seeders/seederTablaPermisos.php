<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//spatie
use Spatie\Permission\Models\Permission;

class seederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permisos = [
            //table roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            //table blogs
            'ver-blog',
            'crear-blog',
            'editar-blog',
            'borrar-blog',
            //table docente
            'ver-docente',
            'crear-docente',
            'editar-docente',
            'borrar-docente',
            //table Asistencia
            'ver-asistencia',
            'crear-asistencia',
            'editar-asistencia',
            'borrar-asistencia',
            //table Niños
            'ver-niños',
            'crear-niños',
            'editar-niños',
            'borrar-niños',  
            //table padres
            'ver-padres',
            'crear-padres',
            'editar-padres',
            'borrar-padres',
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        }
    }
}
