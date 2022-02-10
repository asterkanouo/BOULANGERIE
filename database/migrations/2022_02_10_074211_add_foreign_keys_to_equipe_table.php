<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEquipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('equipe', function (Blueprint $table) {
            $table->foreign(['code_depot'], 'equipe_ibfk_1')->references(['code_depot'])->on('depot');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('equipe', function (Blueprint $table) {
            $table->dropForeign('equipe_ibfk_1');
        });
    }
}
