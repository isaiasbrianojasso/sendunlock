<?php

use Illuminate\Database\Seeder;
use App\Modelo;
class TableModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new Modelo();
        $user->modelo = 'iPhone 6';
        $user->capacidad = 64;
        $user->color = 'Blanco';
        $user->save();
    }
}
