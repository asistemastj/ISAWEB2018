<?php

use App\Area;
use App\Caso;
use App\User;
use App\Envio;
use App\Archivo;
use App\Documento;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	#$this->call(AreaTableSeeder::class);
        #$this->call(UsersTableSeeder::class);
        #desactivamos clave foranea
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        #borrar datos sin tabla
        Area::truncate();
        User::truncate();
        Envio::truncate();
        Caso::truncate();
        Archivo::truncate();
        Documento::truncate();

        factory(Area::class,8)->create();
        factory(User::class, 30)->create();
        factory(Envio::class, 15)->create();
        factory(Caso::class, 5)->create();
        factory(Archivo::class, 10)->create();
        factory(Documento::class, 20)->create();
    }
}
