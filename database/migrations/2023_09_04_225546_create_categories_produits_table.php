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
        Schema::create('categories_produits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_categories')->unsigned()->index();
            $table->bigInteger('id_produit')->unsigned()->index();
            $table->string('ref_produit')->nullable();
            $table->float('valeur_min')->default(0.00);
            $table->float('valeur_max')->default(00.00);
            $table->integer('is_sale')->default(1);
            $table->foreign('id_produit')->references('id')->on('produits')->onDelete('cascade');
            $table->foreign('id_categories')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories_produits');
    }
};
