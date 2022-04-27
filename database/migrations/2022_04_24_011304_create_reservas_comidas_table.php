<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas_comidas', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad_personas');
            
            $table->unsignedBigInteger('comida_id');
            $table->foreign('comida_id')
                ->references('id')
                ->on('comidas')->onDelete('cascade');

            $table->integer('cabana_id');
            $table->foreign('cabana_id')
                ->references('id')
                ->on('cabanas')->onDelete('cascade');         
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas_comidas');
    }
};
