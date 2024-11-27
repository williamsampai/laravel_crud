<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 40);
            $table->int('numero_mesa');
            $table->int('cadeiras');
            $table->date('data');
            $table->time('hora');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};