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
            $table->integer('id_projet')->primary();
            $table->string('libelle_op');
            $table->string('N_individualisation');
            $table->float('AP_actuelle');
            $table->float('depenses_cumules');
            $table->float('PEC');
            $table->float('depenses_previsionnelles');
            $table->integer('id_sect');
            $table->foreign('id_sect')->references('id_sect')->on('secteur');
        });

        DB::table('projet')->insert([
            [

                'id_projet'=>1,
                'libelle_op'=> 'developpement',
                'N_individualisation'=>'dev20545',
                'AP_actuelle'=>25.512,
                'depenses_cumules'=>125.512,
                'PEC'=>225.512,
                'depenses_previsionnelles'=>2785.512,
                'id_sect'=>1
            ],
            [
                'id_projet'=>2,
                'libelle_op'=> 'dev',
                'N_individualisation'=>'dev545',
                'AP_actuelle'=>25.512,
                'depenses_cumules'=>125.512,
                'PEC'=>225.512,
                'depenses_previsionnelles'=>2785.512,
                'id_sect'=>2

            ],
            [

                'id_projet'=>3,
                'libelle_op'=> 'developpement',
                'N_individualisation'=>'dev20545',
                'AP_actuelle'=>25.512,
                'depenses_cumules'=>125.512,
                'PEC'=>225.512,
                'depenses_previsionnelles'=>2785.512,
                'id_sect'=>1
            ],
            [
                'id_projet'=>4,
                'libelle_op'=> 'dev',
                'N_individualisation'=>'dev545',
                'AP_actuelle'=>25.512,
                'depenses_cumules'=>125.512,
                'PEC'=>225.512,
                'depenses_previsionnelles'=>2785.512,
                'id_sect'=>2

            ],
            [

                'id_projet'=>5,
                'libelle_op'=> 'developpement',
                'N_individualisation'=>'dev20545',
                'AP_actuelle'=>25.512,
                'depenses_cumules'=>125.512,
                'PEC'=>225.512,
                'depenses_previsionnelles'=>2785.512,
                'id_sect'=>1
            ],
            [
                'id_projet'=>6,
                'libelle_op'=> 'dev',
                'N_individualisation'=>'dev545',
                'AP_actuelle'=>25.512,
                'depenses_cumules'=>125.512,
                'PEC'=>225.512,
                'depenses_previsionnelles'=>2785.512,
                'id_sect'=>2

            ],
            [

                'id_projet'=>7,
                'libelle_op'=> 'developpement',
                'N_individualisation'=>'dev20545',
                'AP_actuelle'=>25.512,
                'depenses_cumules'=>125.512,
                'PEC'=>225.512,
                'depenses_previsionnelles'=>2785.512,
                'id_sect'=>1
            ],
            [
                'id_projet'=>8,
                'libelle_op'=> 'dev',
                'N_individualisation'=>'dev545',
                'AP_actuelle'=>25.512,
                'depenses_cumules'=>125.512,
                'PEC'=>225.512,
                'depenses_previsionnelles'=>2785.512,
                'id_sect'=>2

            ],
            [

                'id_projet'=>9,
                'libelle_op'=> 'developpement',
                'N_individualisation'=>'dev20545',
                'AP_actuelle'=>25.512,
                'depenses_cumules'=>125.512,
                'PEC'=>225.512,
                'depenses_previsionnelles'=>2785.512,
                'id_sect'=>1
            ],
            [
                'id_projet'=>10,
                'libelle_op'=> 'dev',
                'N_individualisation'=>'dev545',
                'AP_actuelle'=>25.512,
                'depenses_cumules'=>125.512,
                'PEC'=>225.512,
                'depenses_previsionnelles'=>2785.512,
                'id_sect'=>2

            ],
            [

                'id_projet'=>11,
                'libelle_op'=> 'developpement',
                'N_individualisation'=>'dev20545',
                'AP_actuelle'=>25.512,
                'depenses_cumules'=>125.512,
                'PEC'=>225.512,
                'depenses_previsionnelles'=>2785.512,
                'id_sect'=>1
            ],
            [
                'id_projet'=>12,
                'libelle_op'=> 'dev',
                'N_individualisation'=>'dev545',
                'AP_actuelle'=>25.512,
                'depenses_cumules'=>125.512,
                'PEC'=>225.512,
                'depenses_previsionnelles'=>2785.512,
                'id_sect'=>2

            ],

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
