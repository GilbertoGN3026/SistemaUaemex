<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servicio;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicio::create([
            'nombre_servicio' => 'Equipo de Computo',
           
        ]);
        Servicio::create([
            'nombre_servicio' => 'Impresiones',
           
        ]);
        Servicio::create([
            'nombre_servicio' => 'Escaneo',
           
        ]);
    }
}