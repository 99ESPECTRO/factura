<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle', function (Blueprint $table) {
            $table->unsignedBigInteger('factura_id');
            $table->unsignedBigInteger('producto_id');
            $table->integer('cantidad');
            $table->integer('precio_unitario');
            $table->timestamps();

            $table->primary(['factura_id', 'producto_id']); //me olvide esta linea xD (es una llave compuesta)
            $table->foreign('factura_id')
                ->references('id')
                ->on('factura')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('producto_id')
                ->references('id')
                ->on('producto')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle');
    }
};
