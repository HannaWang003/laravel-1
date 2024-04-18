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
        Schema::create('buyhouses', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('title');
            $table->string('addr');
            $table->string('type');
            $table->string('pyeongType');
            $table->string('rooms');
            $table->string('floors');
            $table->string('info');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyhouses');
    }
};
