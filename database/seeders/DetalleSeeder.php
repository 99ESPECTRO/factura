<?php

namespace Database\Seeders;

use App\Models\Detalle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Detalle::create([
            'factura_id' => '1',
            'producto_id' => '2',
            'cantidad' => '3',
            'precio_unitario' => '100'
        ]);
    }
}
