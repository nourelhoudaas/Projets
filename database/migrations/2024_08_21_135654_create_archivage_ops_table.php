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
        Schema::create('archivage_op', function (Blueprint $table) {
            $table->integer('id_archiv_op')->primary()->autoIncrement();
            $table->integer('id_lib_op');
            $table->foreign('id_lib_op')->references('id_lib_op')->on('operation');
            $table->integer('id_etat');
            $table->foreign('id_etat')->references('id_etat')->on('etat_avance');
            $table->DateTime('date_chang_op');

        });

        DB::table('archivage_op')->insert([
            [
                'id_archiv' =>1,
                'id_lib_op'=> 1,
                'id_etat'=> 1,
                'date_chang'=> '2022-08-31'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archivage_op');
    }
};
