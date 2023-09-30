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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categorie_id')->unsigned()->index();
            $table->string('code_produit')->unique()->nullable();
            $table->string('lib_produit')->nullable();
            $table->string('designation_produit')->nullable();
            $table->float('prix_unitaire')->default(0, 00)->nullable();
            $table->bigInteger('unite')->default(0)->nullable();
            $table->integer('is_produit')->default(1);
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
