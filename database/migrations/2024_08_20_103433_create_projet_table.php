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

        DB::table('projet')->insert([
            [
                'id_projet' => 1,
                'id_sect' =>1,
                'nom_projet'=> 'developpement',
                'etablissement_projet'=>'personnel',
                'definition_projet'=>'investissement'
            ],
            [
                'id_projet' => 2,
                'id_sect' =>2,
                'nom_projet'=> 'developpement2',
                'etablissement_projet'=>'personnel2',
                'definition_projet'=>'investissement2'
            ],
            [
                'id_projet' => 3,
                'id_sect' =>2,
                'nom_projet'=> 'developpement2',
                'etablissement_projet'=>'personnel2',
                'definition_projet'=>'investissement2'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projet');
    }
};
