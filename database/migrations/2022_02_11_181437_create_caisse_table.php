<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaisseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caisse', function (Blueprint $table) {
            $table->integer('code_caisse', true);
            $table->integer('code_depot')->nullable()->index('code_depot');
            $table->text('libelle')->nullable();
            $table->text('numero')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caisse');
    }
}
