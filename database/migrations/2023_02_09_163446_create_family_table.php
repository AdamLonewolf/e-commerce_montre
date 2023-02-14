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
        Schema::create('family', function (Blueprint $table) {
            $table->foreignId('family_id')->nullable()->constrained('produits')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('produits_id')->nullable()->constrained('produits')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(["family_id","produits_id"]);
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
        Schema::dropIfExists('family');
    }
};
