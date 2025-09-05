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
        Schema::create('patients_list', function (Blueprint $table) {
            $table->id();
            $table->varchar('code_id')->primary();
            $table->varchar('bed');
            $table->integer('card_id');
            $table->varchar('address');
            $table->integer('phonenumber');
            $table->timestamps();
        });
    }

     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients_list');
    }
};
