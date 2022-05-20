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
            'listar-docente',
            'editar-docente',
            'borrar-docente',
            //table Asistencia
            'ver-asistencia',
            'listar-asistencia',
            'editar-asistencia',
            'borrar-asistencia',
            //table Niños
            'ver-niños',
            'listar-niños',
            'editar-niños',
            'borrar-niños',  
            //table padres
            'ver-padres',
            'listar-padres',
            'editar-padres',
            'borrar-padres',
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        }
    }
}
