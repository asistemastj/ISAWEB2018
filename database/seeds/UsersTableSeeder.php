<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #creamos usuario
        DB::table('users')->insert([
            'nombre' => str_random(10),
            'username' => str_random(5),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'estado' => 'ACTIVO',
            'admin' => 'NORMAL',
            'area_id' => 1
        ]);
    }
}
