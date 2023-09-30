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
        Schema::create('agences_services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idagence')->unsigned()->index();
            $table->bigInteger('iddepartement')->unsigned()->index();
            $table->integer('is_agencesservices')->default(1);
            $table->foreign('idagence')->references('id')->on('taches')->onDelete('cascade');
            $table->foreign('iddepartement')->references('id')->on('departements')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agences_services');
    }
};
