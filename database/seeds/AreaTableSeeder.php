<?php

use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #creamos area
        DB::table('area')->insert([
            'nombre' => str_random(10),
            'codigo' => str_random(4),
            'descripcion' => 'ACTIVO',
            'estado' => 'NORMAL',
        ]);
    }
}
