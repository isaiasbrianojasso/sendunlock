<?php

use Illuminate\Database\Seeder;
use App\Usuario;
use Illuminate\Support\Facades\Auth;
use App\User;
class TableUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Enrique';
        $user->email = 'gomezlopeznapoleon@gmail.com';
        $user->password = bcrypt('12345678');
        $user->rol = 'admin';
        $user->fechaactivo = '15-01-1985';
        $user->fechafinal = '15-01-2020';
        $user->estatus = '1';
        $user->telefono = '4443565745';
        $user->creditos = 10;

        $user->save();
        
    }
}
