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
        Schema::create('receive_tb1', function (Blueprint $table) {
            $table->id();
            $table->decimal('receive_t1', 10, 2);
            $table->timestamps();
        });

        Schema::create('receive_tb2', function (Blueprint $table) {
            $table->id();
            $table->decimal('receive_t2', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receive_tb1');
        Schema::dropIfExists('receive_tb2');
    }
};
