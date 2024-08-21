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
        Schema::create('secteur', function (Blueprint $table) {
            $table->integer('id_sect')->primary()->autoIncrement();
            $table->string('nom_sect');

        });

        DB::table('secteur')->insert([
            [
                'id_sect' =>1,
                'nom_sect'=> 'developpement',
                'etablissement_projet'=>'personnel',
                'definition_projet'=>'investissement'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('secteur');
    }
};
