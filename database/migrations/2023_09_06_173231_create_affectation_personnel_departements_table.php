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
        Schema::create('affectation_personnel_departements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('iddepartement')->unsigned()->index();
            $table->bigInteger('idpersonnel')->unsigned()->index();
            $table->bigInteger('idagence')->unsigned()->index();
            $table->timestamp('affectation');
            $table->integer('is_affectation')->default(1);
            $table->foreign('iddepartement')->references('id')->on('departements')->onDelete('cascade');
            $table->foreign('idagence')->references('id')->on('agences')->onDelete('cascade');
            $table->foreign('idpersonnel')->references('id')->on('personnels')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affectation_personnel_departements');
    }
};
