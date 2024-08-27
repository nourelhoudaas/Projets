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
        Schema::create('archivage_projet', function (Blueprint $table) {
            $table->integer('id_archiv_proj')->primary()->autoIncrement();
            $table->integer('id_projet');
            $table->foreign('id_projet')->references('id_projet')->on('projet');
            $table->integer('id_etat');
            $table->foreign('id_etat')->references('id_etat')->on('etat_avance');
            
            $table->DateTime('date_chang_proj');

        });

       DB::table('archivage_projet')->insert([
            [
               
                'id_projet'=> 1,
                'id_etat'=> 1,
                'date_chang_proj'=> '2022-08-31'
            ],
            [
               
                'id_projet'=> 2,
                'id_etat'=> 2,
                'date_chang_proj'=> '2023-08-31'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archivage_projet');
    }
};
