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
        Schema::create('proveedores', function (Blueprint $table) {
        $table->id();
        $table->string(column:'nomb');
        $table->string(column:'categoria');
        $table->string(column:'precio');
        $table->string(column:'descripcion');
        $table->string(column:'codigo');
        $table->string(column:'proveedor');
        $table->string('img');
        $table->timestamps();
        $table->softDeletes();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
