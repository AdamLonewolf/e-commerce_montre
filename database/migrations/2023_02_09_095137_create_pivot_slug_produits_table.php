<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_slug_produits', function (Blueprint $table) {
            $table->foreignId('slug_id')->nullable()->constrained('slugs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('produit_id')->nullable()->constrained('produits')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(["slug_id", "produit_id"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_slug_produits');
    }
};
