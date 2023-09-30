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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('code_client')->nullable();
            $table->string('name_client')->nullable();
            $table->string('surname_client')->nullable();
            $table->date('datenaissance_client')->nullable();
            $table->string('lieunaissance_client')->nullable();
            $table->string('genre_client')->nullable();
            $table->text('description_client')->nullable();
            $table->string('ref_client')->nullable();
            $table->string('photo_client')->default('');
            $table->integer('is_soustraitant')->default(1);
            $table->integer('is_client')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
