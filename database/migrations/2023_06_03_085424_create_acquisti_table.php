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
        Schema::create('acquisti', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_servizio');
            $table->unsignedBigInteger('id_point');
            $table->unsignedBigInteger('id_utente');
            $table->date('data_acquisto');
            $table->decimal('prezzo_acquisto',6,2);
            $table->date('data_prestazione');
            $table->timestamps();

            $table->foreign('id_servizio')->references('id')->on('servizi');
            $table->foreign('id_point')->references('id')->on('points');
            $table->foreign('id_utente')->references('id')->on('utenti');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acquisti');
    }
};
