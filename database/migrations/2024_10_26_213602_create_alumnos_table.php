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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string("noCtrl",8)->unique();
            $table->string("nombreAlumno",50);
            $table->string("apellidoPaterno",50);
            $table->string("apellidoMaterno",50);
            $table->string("sexo",1);
            $table->string("email",200);
            $table->foreignId("carrera_id")->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
