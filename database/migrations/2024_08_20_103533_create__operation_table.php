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
            $table->integer('num_op');
            $table->integer('id_etat');
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
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operation');
    }
};
