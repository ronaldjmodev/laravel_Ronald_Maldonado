<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('car_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', length: 100);
            $table->string('descripcion', length: 100);
            $table->string('imagen');

        });
    }

        public function down(): void
    {
        Schema::dropIfExists('car_types');
    }
};
