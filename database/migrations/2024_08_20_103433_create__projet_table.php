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
        Schema::create('projet', function (Blueprint $table) {
            $table->integer('id_projet')->primary()->autoIncrement();
            $table->integer('id_sect');
            $table->string('nom_projet');
            $table->string('etablissement_projet');
            $table->string('definition_projet');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projet');
    }
};
