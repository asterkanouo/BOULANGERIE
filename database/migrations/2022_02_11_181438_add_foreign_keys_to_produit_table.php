<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produit', function (Blueprint $table) {
            $table->foreign(['code_depot'], 'produit_ibfk_1')->references(['code_depot'])->on('depot');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produit', function (Blueprint $table) {
            $table->dropForeign('produit_ibfk_1');
        });
    }
}
