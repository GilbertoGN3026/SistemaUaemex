<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuar;

class UsuarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuar::create([
            'tipo_usuario' => 'Alumno',
           
        ]);
        Usuar::create([
            'tipo_usuario' => 'Administrativo',
           
        ]);
    }
}