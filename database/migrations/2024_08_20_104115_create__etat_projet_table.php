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
        Schema::create('etat_projet', function (Blueprint $table) {
            $table->integer('id_etat')->primary()->autoIncrement();
            $table->string('nom_etat');
            $table->string('descriptif_etat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etat_projet');
    }
};
