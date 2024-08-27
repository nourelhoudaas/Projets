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
            $table->integer('id_projet');
            $table->foreign('id_projet')->references('id_projet')->on('projet');
        });

        DB::table('secteur')->insert([
            [
                'id_sect' =>1,
                'nom_sect'=> 'media',
                'id_projet' =>1,
                
            ],
            [
                'id_sect' =>2,
                'nom_sect'=> 'autre',
                'id_projet' =>2,
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
