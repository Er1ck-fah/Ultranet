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
        Schema::create('delegation_taches', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idtaches')->unsigned()->index();
            $table->bigInteger('idaffecation')->unsigned()->index();
            $table->date('delegation')->useCurrent();
            $table->integer('status_taches')->default(0);
            $table->foreign('idtaches')->references('id')->on('taches')->onDelete('cascade');
            $table->foreign('idaffecation')->references('id')->on('affectation_personnel_departements')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delegation_taches');
    }
};
