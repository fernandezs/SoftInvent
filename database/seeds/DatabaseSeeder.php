<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OptionsTableSeeder::class);
        $this->call(RolsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ConfigurationsTableSeeder::class);
        $this->call(ProvedorTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(ArticuloTableSeeder::class);
        $this->call(ClienteTableSeeder::class);
        $this->call(EmpleadoTableSeeder::class);

//        $this->call(NotasTableSeeder::class);
    }
}
