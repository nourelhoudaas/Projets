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
        Schema::create('operation', function (Blueprint $table) {
            $table->integer('id_lib_op')->primary()->autoIncrement();
            $table->integer('num_op')->unique();
            $table->integer('id_projet');
            $table->string('objet_vis_op');
            $table->string('contraint_rea_op');
            $table->date('date_notifM_op');
            $table->date('date_chang');
            $table->date('date_indiv_op');
            $table->float('ap_init_op');
            $table->float('ap_actu_op');
            $table->float('cumul_ap_eng_op');
            $table->float('cumul_ap_pai_reel_op');
            $table->float('taux_rea_phy_op');
            $table->timestamps();

        });

        DB::table('operation')->insert([
            [
                'id_lib_op' =>1,
                'num_op'=> 1,
                'id_projet'=> 1,
                'objet_vis_op'=> 'renové',
                'objet_vis_op'=> 'renové',
                'contraint_rea_op'=> 'contrainte',
                'date_notifM_op'=> '2020-08-31',
                'date_chang'=> '2022-08-31',
                'date_indiv_op'=> '2023-08-31',
                'ap_init_op'=> 12.20,
                'ap_actu_op'=> 120.20,
                'cumul_ap_eng_op'=> 412.20,
                'cumul_ap_pai_reel_op'=> 4412.20,
                'taux_rea_phy_op'=> 4712.20,
            ],
            [
                'id_lib_op' =>2,
                'num_op'=> 2,
                'id_projet'=> 1,
                'objet_vis_op'=> 'Rrenové',
                'objet_vis_op'=> 'Rrenové',
                'contraint_rea_op'=> 'Ccontrainte',
                'date_notifM_op'=> '2020-07-31',
                'date_chang'=> '2022-05-20',
                'date_indiv_op'=> '2023-07-31',
                'ap_init_op'=> 12.205,
                'ap_actu_op'=> 120.205,
                'cumul_ap_eng_op'=> 4152.20,
                'cumul_ap_pai_reel_op'=> 4412.220,
                'taux_rea_phy_op'=> 4712.205,
            ],
            [
                'id_lib_op' =>3,
                'num_op'=> 3,
                'id_projet'=> 2,
                'objet_vis_op'=> 'renové',
                'objet_vis_op'=> 'renové',
                'contraint_rea_op'=> 'contrainte',
                'date_notifM_op'=> '2020-08-31',
                'date_chang'=> '2022-08-31',
                'date_indiv_op'=> '2023-08-31',
                'ap_init_op'=> 12.20,
                'ap_actu_op'=> 120.20,
                'cumul_ap_eng_op'=> 412.20,
                'cumul_ap_pai_reel_op'=> 4412.20,
                'taux_rea_phy_op'=> 4712.20,
            ],
            [
                'id_lib_op' =>4,
                'num_op'=> 4,
                'id_projet'=> 2,
                'objet_vis_op'=> 'Rrenové',
                'objet_vis_op'=> 'Rrenové',
                'contraint_rea_op'=> 'Ccontrainte',
                'date_notifM_op'=> '2020-07-31',
                'date_chang'=> '2022-05-20',
                'date_indiv_op'=> '2023-07-31',
                'ap_init_op'=> 12.205,
                'ap_actu_op'=> 120.205,
                'cumul_ap_eng_op'=> 4152.20,
                'cumul_ap_pai_reel_op'=> 4412.220,
                'taux_rea_phy_op'=> 4712.205,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operation');
    }
};
