<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMatierePremiereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matiere_premiere', function (Blueprint $table) {
            $table->foreign(['code_depot'], 'matiere_premiere_ibfk_1')->references(['code_depot'])->on('depot');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matiere_premiere', function (Blueprint $table) {
            $table->dropForeign('matiere_premiere_ibfk_1');
        });
    }
}
