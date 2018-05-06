<?php

use Illuminate\Database\Seeder;
use App\Models\Articulo;
class ArticuloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Articulo::class, 100)->create()->each(function(Articulo $articulo){
            $articulo->proveedores()->attach([
                rand(1,5),
                rand(6,14),
                rand(15,29),
            ]);
        });
    }
}
