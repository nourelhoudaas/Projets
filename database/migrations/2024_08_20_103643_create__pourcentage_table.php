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
        Schema::create('pourcentage', function (Blueprint $table) {
            $table->integer('id_pourc')->primary()->autoIncrement();
            $table->integer('id_projet');
            $table->integer('id_etat');
            $table->date('date_chang');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pourcentage');
    }
};
