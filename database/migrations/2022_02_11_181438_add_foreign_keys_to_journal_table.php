<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToJournalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('journal', function (Blueprint $table) {
            $table->foreign(['numcompte'], 'journal_ibfk_1')->references(['numcompte'])->on('lescompte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('journal', function (Blueprint $table) {
            $table->dropForeign('journal_ibfk_1');
        });
    }
}
