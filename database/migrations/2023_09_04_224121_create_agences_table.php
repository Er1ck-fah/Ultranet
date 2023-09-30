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
        Schema::create('agences', function (Blueprint $table) {
            $table->id();
            $table->string('code_agence')->nullable();
            $table->string('lib_agence')->nullable();
            $table->string('adresse_agence')->nullable();
            $table->string('tel_agence')->nullable();
            $table->text('designation_agence')->nullable();
            $table->integer('is_agence')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agences');
    }
};
