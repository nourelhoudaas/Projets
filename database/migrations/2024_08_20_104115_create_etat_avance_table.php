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
        Schema::create('etat_avance', function (Blueprint $table) {
            $table->integer('id_etat')->primary()->autoIncrement();
            $table->string('nom_etat');
            $table->string('descriptif_etat');
        });

        DB::table('etat_avance')->insert([
            [
                'nom_etat' =>'relisé',
                'id_etat'=> 1,
                'descriptif_etat'=> 'blabla'
            ],
            [
                'nom_etat' =>'en cours',
                'id_etat'=> 2,
                'descriptif_etat'=> 'blabla2'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etat_avance');
    }
};
