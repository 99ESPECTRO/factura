<?php

namespace Database\Seeders;

use App\Models\Factura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Factura::create([
            'nit' => rand(1,9000),
            'telefono' => rand(60000000,70000000),
            'nombre' => 'andres'
        ]);
    }
}
