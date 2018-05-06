<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('options')->delete();
        
        \DB::table('options')->insert(array (
            0 => 
            array (
                'id' => 1,
                'padre' => NULL,
                'nombre' => 'Admin',
                'ruta' => NULL,
                'descripcion' => 'Opciones de administración',
                'icono_l' => 'fa-folder',
                'icono_r' => 'fa-angle-left',
                'orden' => 0,
                'created_at' => '2017-07-09 10:35:37',
                'updated_at' => '2017-11-07 16:42:44',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'padre' => 1,
                'nombre' => 'Usuarios',
                'ruta' => 'admin/users',
                'descripcion' => 'Administración de usuarios',
                'icono_l' => 'fa-circle-o',
                'icono_r' => '',
                'orden' => 2,
                'created_at' => '2017-07-09 10:35:37',
                'updated_at' => '2017-11-07 16:42:44',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'padre' => 1,
                'nombre' => 'Opciones',
                'ruta' => 'admin/option',
                'descripcion' => 'Administración de las opciones del menu',
                'icono_l' => 'fa-circle-o',
                'icono_r' => '',
                'orden' => 3,
                'created_at' => '2017-07-09 10:35:37',
                'updated_at' => '2017-11-07 16:42:44',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'padre' => 1,
                'nombre' => 'Roles',
                'ruta' => 'admin/rols',
                'descripcion' => 'Administración de los roles de los usuarios',
                'icono_l' => 'fa-circle-o',
                'icono_r' => '',
                'orden' => 4,
                'created_at' => '2017-07-09 10:35:37',
                'updated_at' => '2017-11-07 16:42:44',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'padre' => NULL,
                'nombre' => 'Ayuda',
                'ruta' => NULL,
                'descripcion' => 'Manual de usuario y tutoriales',
                'icono_l' => 'fa-plus-square',
                'icono_r' => '',
                'orden' => 6,
                'created_at' => '2017-07-09 10:35:37',
                'updated_at' => '2017-11-07 16:42:44',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'padre' => NULL,
                'nombre' => 'Acerca De...',
                'ruta' => NULL,
                'descripcion' => '',
                'icono_l' => 'fa-info-circle',
                'icono_r' => '',
                'orden' => 7,
                'created_at' => '2017-07-09 10:35:37',
                'updated_at' => '2017-11-07 16:42:44',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'padre' => 1,
                'nombre' => 'Configuraciones',
                'ruta' => 'admin/configurations',
                'descripcion' => NULL,
                'icono_l' => 'fa fa-circle-o',
                'icono_r' => NULL,
                'orden' => 1,
                'created_at' => '2017-07-11 10:30:19',
                'updated_at' => '2017-11-07 16:42:44',
                'deleted_at' => NULL,
            ),
            7 =>
                array (
                    'id' => 8,
                    'padre' => NULL,
                    'nombre' => 'Proveedores',
                    'ruta' => 'proveedores',
                    'descripcion' => 'Proveedores del sitio',
                    'icono_l' => 'fa-truck',
                    'icono_r' => '',
                    'orden' => 6,
                    'created_at' => '2017-07-09 10:35:37',
                    'updated_at' => '2017-11-07 16:42:44',
                    'deleted_at' => NULL,
                ),
            8 =>
                array (
                    'id' => 9,
                    'padre' => NULL,
                    'nombre' => 'Categorias',
                    'ruta' => 'categorias',
                    'descripcion' => 'Categorias de los articulos',
                    'icono_l' => 'fa-th-large ',
                    'icono_r' => '',
                    'orden' => 6,
                    'created_at' => '2017-07-09 10:35:37',
                    'updated_at' => '2017-11-07 16:42:44',
                    'deleted_at' => NULL,
                ),
            9 =>
                array (
                    'id' => 10,
                    'padre' => NULL,
                    'nombre' => 'Articulos',
                    'ruta' => 'articulos',
                    'descripcion' => 'Articulos del negocio',
                    'icono_l' => 'fa-cubes',
                    'icono_r' => '',
                    'orden' => 6,
                    'created_at' => '2017-07-09 10:35:37',
                    'updated_at' => '2017-11-07 16:42:44',
                    'deleted_at' => NULL,
                ),
            10 =>
                array (
                    'id' => 11,
                    'padre' => NULL,
                    'nombre' => 'Reparaciones',
                    'ruta' => 'reparaciones',
                    'descripcion' => 'Reparaciones del los articulos',
                    'icono_l' => 'fa-wrench',
                    'icono_r' => '',
                    'orden' => 6,
                    'created_at' => '2017-07-09 10:35:37',
                    'updated_at' => '2017-11-07 16:42:44',
                    'deleted_at' => NULL,
                ),
            11 =>
                array (
                    'id' => 12,
                    'padre' => NULL,
                    'nombre' => 'Gestion',
                    'ruta' => '#',
                    'descripcion' => 'Reparaciones del los articulos',
                    'icono_l' => 'fa-users',
                    'icono_r' => '',
                    'orden' => 6,
                    'created_at' => '2017-07-09 10:35:37',
                    'updated_at' => '2017-11-07 16:42:44',
                    'deleted_at' => NULL,
                ),
            12 =>
                    array (
                        'id' => 13,
                        'padre' => 12,
                        'nombre' => 'Clientes',
                        'ruta' => 'clientes',
                        'descripcion' => 'Clientes del sistema',
                        'icono_l' => 'fa-users',
                        'icono_r' => '',
                        'orden' => 6,
                        'created_at' => '2017-07-09 10:35:37',
                        'updated_at' => '2017-11-07 16:42:44',
                        'deleted_at' => NULL,
                    ),
            13 =>
                    array (
                        'id' => 14,
                        'padre' => 12,
                        'nombre' => 'Empleados',
                        'ruta' => 'empleados',
                        'descripcion' => 'Empleados de la empresa',
                        'icono_l' => 'fa-users',
                        'icono_r' => '',
                        'orden' => 6,
                        'created_at' => '2017-07-09 10:35:37',
                        'updated_at' => '2017-11-07 16:42:44',
                        'deleted_at' => NULL,
                    ),

            
        ));
        
        
    }
}