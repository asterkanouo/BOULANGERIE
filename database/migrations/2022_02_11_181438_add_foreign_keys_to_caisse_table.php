<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCaisseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('caisse', function (Blueprint $table) {
            $table->foreign(['code_depot'], 'caisse_ibfk_1')->references(['code_depot'])->on('depot');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('caisse', function (Blueprint $table) {
            $table->dropForeign('caisse_ibfk_1');
        });
    }
}
