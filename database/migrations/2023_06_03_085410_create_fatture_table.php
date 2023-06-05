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
        Schema::create('fatture', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_point');
            $table->decimal('totale',6,2);
            $table->date('data_fattura');
            $table->integer('numero_fattura_cliente');
            $table->timestamps();

            $table->foreign('id_point')->references('id')->on('points');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fatture');
    }
};
