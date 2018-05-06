<?php

use Illuminate\Database\Seeder;

class ProvedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Proveedor::class, 30)->create();
    }
}
