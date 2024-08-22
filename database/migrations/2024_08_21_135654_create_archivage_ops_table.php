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
            $table->integer('id_archiv')->primary()->autoIncrement();
            $table->foreignId('id_lib_op');
            $table->foreignId('id_etat');
            $table->date('date_chang');

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
