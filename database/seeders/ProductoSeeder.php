<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Producto = Producto::create([
            'nombre' => 'polera',
            'cantidad' => '50',
            'descripcion' => 'poleras talla M color blanco'
        ]);
        producto::create([
            'nombre' => 'pantalon',
            'cantidad' => '80',
            'descripcion' => 'pantalones talla 40 levanta cola'
        ]);
    }
}
