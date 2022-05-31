<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $usuario =  User::create([
         'name' => 'Maykol',
         'email' => 'maykol@gmail.com',
         'password' => bcrypt('admin123')
      ]);

   // $rol -> Role::create(['name' => 'Administrador']);

  //agregamos $permisos = Permission::pluck('id', 'id')->all();
   

 //  $rol->syncPermissions($permisos);

//$usuario->assignRole([$rol->id]); -> por si no hay administrador creado
$usuario->assignRole(['Administrador']);

    }
}
