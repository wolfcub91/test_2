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
        Schema::create('servizi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_point');
            $table->string('nome');
            $table->decimal('prezzo_attuale',6,2);
            $table->integer('tempo_prestazione');
            $table->boolean('attivo');
            $table->date('data_disp');
            $table->timestamps();

            $table->foreign('id_point')->references('id')->on('points');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servizi');
    }
};
