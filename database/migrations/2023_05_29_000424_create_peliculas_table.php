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
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('categoria');
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('anio');
            $table->integer('activo')->default(1);
            $table->foreignId('id_director')->nullable()->constrained('directors')->cascadeOnUpdate()->nullOnDelete(); //
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
        Schema::dropIfExists('peliculas');
    }
};
