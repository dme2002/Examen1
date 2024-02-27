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
        Schema::create('tipo_asiento', function (Blueprint $table) {
            $table->integer('idTipoAsiento')->primaryKey();
            $table->string('descripcion',50);
            $table->double('precio');
            $table->string('estado',2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_asiento');
    }
};
