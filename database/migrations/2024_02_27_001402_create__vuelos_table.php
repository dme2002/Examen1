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
        Schema::create('_vuelos', function (Blueprint $table) {
            $table->float('numeroVuelo')->primaryKey();
            $table->string('origen', 10);
            $table->string('destino',50);
            $table->string('numeroAsientos',10);
            $table->timestamp('fechadeSalida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_vuelos');
    }
};
