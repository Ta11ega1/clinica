<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Users
        Permission::create([
        	'name'	=> 'Navegar usuarios',
        	'slug'	=> 'users.index',
        	'description' => 'Lista y navega todos los usuarios del sistema',

        ]);

        Permission::create([
        	'name'	=> 'Ver detalle usuario',
        	'slug'	=> 'users.show',
        	'description' => 'Ver en detalle cada usuario del sistema',

        ]);

        Permission::create([
        	'name'	=> 'Edición de usuarios',
        	'slug'	=> 'users.edit',
        	'description' => 'Editar cualquier dato de un usuario del sistema',

        ]);

        Permission::create([
        	'name'	=> 'Eliminar usuario',
        	'slug'	=> 'users.destroy',
        	'description' => 'Eliminar cualquier usuario del sistema',

        ]);

        //Roles
        Permission::create([
        	'name'	=> 'Navegar roles',
        	'slug'	=> 'roles.index',
        	'description' => 'Lista y navega todos los usrolesuarios del sistema',

        ]);

        Permission::create([
        	'name'	=> 'Ver detalle de rol',
        	'slug'	=> 'roles.show',
        	'description' => 'Ver en detalle cada rol del sistema',

        ]);

        Permission::create([
        	'name'	=> 'Creación de roles',
        	'slug'	=> 'roles.create',
        	'description' => 'Editar cualquier dato de un rol del sistema',

        ]);

        Permission::create([
        	'name'	=> 'Edición de roles',
        	'slug'	=> 'roles.edit',
        	'description' => 'Editar cualquier dato de un rol del sistema',

        ]);

        Permission::create([
        	'name'	=> 'Eliminar rol',
        	'slug'	=> 'roles.destroy',
        	'description' => 'Eliminar cualquier rol del sistema',

        ]);

       //productos
       Permission::create([
        	'name'	=> 'Navegar Medicos',
        	'slug'	=> 'medics.index',
        	'description' => 'Lista y navega todos los medicos del sistema',

        ]);

        Permission::create([
        	'name'	=> 'Ver detalle de medico',
        	'slug'	=> 'medics.show',
        	'description' => 'Ver en detalle cada medico del sistema',

        ]);

        Permission::create([
        	'name'	=> 'Creación de medicos',
        	'slug'	=> 'medics.create',
        	'description' => 'Puede crear un medico en el sistema',

        ]);

        Permission::create([
        	'name'	=> 'Edición de medicos',
        	'slug'	=> 'medics.edit',
        	'description' => 'Editar cualquier dato de un medico del sistema',

        ]);

        Permission::create([
        	'name'	=> 'Eliminar medico',
        	'slug'	=> 'medics.destroy',
        	'description' => 'Eliminar cualquier medico del sistema',

        ]); 
    }
}
