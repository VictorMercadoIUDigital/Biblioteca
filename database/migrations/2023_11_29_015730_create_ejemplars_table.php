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
        Schema::create('ejemplars', function (Blueprint $table) {
            $table->id();
            $table->biginteger('IdLibro')->unsigned()->nullable();
            $table->string('localizacion',100);
            $table->timestamps();
             //Agregamos la clave foranea
             $table->foreign('IdLibro')->references('id')->on('books')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejemplars');
    }
};
