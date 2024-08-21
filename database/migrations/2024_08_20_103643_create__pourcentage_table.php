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
            $table->integer('id_lib_op');
            $table->integer('id_etat');
            $table->date('date_chang');

        });

        DB::table('pourcentage')->insert([
            [
                'id_pourc' =>1,
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
        Schema::dropIfExists('pourcentage');
    }
};
